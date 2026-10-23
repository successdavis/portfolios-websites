<script setup lang="ts">
import type { LiquidGlass, LiquidGlassParams } from 'liquid-glass-js';
import { onBeforeUnmount, onMounted, ref } from 'vue';

/**
 * Anchors a liquid-glass-js lens to this element's box so it scrolls with
 * the page. The lens refracts a clone of `background` (a CSS selector for a
 * static decorative scene), and the slot content is rendered on top of it.
 * Give the element a position (`relative`/`absolute`) so its z-index applies.
 */
const props = withDefaults(
    defineProps<{
        background: string;
        options?: Partial<LiquidGlassParams>;
        /** Float amplitude in px (0 disables the idle drift). */
        float?: number;
        /** Seconds per float cycle. */
        period?: number;
        phase?: number;
        zIndex?: number;
    }>(),
    {
        options: () => ({}),
        float: 0,
        period: 9,
        phase: 0,
        zIndex: 10,
    },
);

const anchor = ref<HTMLElement | null>(null);

let glass: LiquidGlass | null = null;
let raf = 0;
let visible = false;
let reducedMotion = false;
let intersection: IntersectionObserver | null = null;
let resize: ResizeObserver | null = null;
let destroyed = false;

const layers = () => {
    const g = glass as unknown as {
        glassEl?: HTMLElement;
        lensEl?: HTMLElement;
    } | null;
    return [g?.glassEl, g?.lensEl].filter(Boolean) as HTMLElement[];
};

const setShown = (shown: boolean) => {
    for (const el of layers()) el.style.visibility = shown ? '' : 'hidden';
};

const tick = (now: number) => {
    raf = 0;
    if (!glass || !anchor.value || !visible) return;

    const rect = anchor.value.getBoundingClientRect();
    let dx = 0;
    let dy = 0;

    if (props.float > 0 && !reducedMotion) {
        const t = (now / 1000 / props.period) * Math.PI * 2 + props.phase;
        dx = Math.sin(t) * props.float;
        dy = Math.cos(t * 0.8) * props.float * 0.7;
    }

    glass.moveTo(rect.left + dx, rect.top + dy);
    raf = requestAnimationFrame(tick);
};

const start = () => {
    if (!raf) raf = requestAnimationFrame(tick);
};

onMounted(async () => {
    const el = anchor.value;
    const bg = document.querySelector(props.background);
    if (!el || !bg) return;

    reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)',
    ).matches;

    const { default: LiquidGlassClass } = await import('liquid-glass-js');
    if (destroyed) return;

    const rect = el.getBoundingClientRect();
    glass = new LiquidGlassClass({
        ...props.options,
        background: bg,
        draggable: false,
        zIndex: props.zIndex,
        width: Math.round(rect.width),
        height: Math.round(rect.height),
        x: rect.left,
        y: rect.top,
    });
    setShown(false);

    let lastW = Math.round(rect.width);
    let lastH = Math.round(rect.height);
    resize = new ResizeObserver(([entry]) => {
        const w = Math.round(entry.contentRect.width);
        const h = Math.round(entry.contentRect.height);
        if (!glass || (w === lastW && h === lastH) || !w || !h) return;
        lastW = w;
        lastH = h;
        glass.set({ width: w, height: h });
    });
    resize.observe(el);

    intersection = new IntersectionObserver(
        ([entry]) => {
            visible = entry.isIntersecting;
            setShown(visible);
            if (visible) start();
        },
        { rootMargin: '80px' },
    );
    intersection.observe(el);
});

onBeforeUnmount(() => {
    destroyed = true;
    cancelAnimationFrame(raf);
    intersection?.disconnect();
    resize?.disconnect();
    glass?.destroy();
    glass = null;
});
</script>

<template>
    <div ref="anchor" class="z-20">
        <slot />
    </div>
</template>
