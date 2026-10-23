<script setup lang="ts">
import { ArrowRight, Check, Sparkles } from 'lucide-vue-next';
import LiquidGlassLens from './LiquidGlassLens.vue';

const capabilities = [
    'Website design & development',
    'Workflow automation & AI',
    'Custom web apps & APIs',
];

const cardGlass = {
    radius: 32,
    scale: 52,
    depth: 46,
    curvature: 3.4,
    chroma: 0.14,
    blur: 3,
    glow: 0.12,
    edge: 0.75,
    tint: 0.04,
};

const orbGlass = {
    scale: 70,
    depth: 80,
    curvature: 2.2,
    chroma: 0.22,
    blur: 0,
    glow: 0.2,
    edge: 0.9,
};
</script>

<template>
    <section
        id="top"
        class="relative flex min-h-[100svh] items-center overflow-hidden"
    >
        <!-- Static scene refracted by the liquid-glass lenses -->
        <div
            id="hero-scene"
            class="pointer-events-none absolute inset-0 overflow-hidden bg-[#07080c]"
            aria-hidden="true"
        >
            <div
                class="absolute inset-0 bg-grid [mask-image:radial-gradient(ellipse_at_center,black_30%,transparent_75%)]"
            ></div>
            <div
                class="absolute -top-40 right-[-10%] size-[42rem] rounded-full bg-[#e3ae45]/30 blur-[120px]"
            ></div>
            <div
                class="absolute top-1/3 -left-40 size-[34rem] rounded-full bg-[#6d4aff]/25 blur-[120px]"
            ></div>
            <div
                class="absolute -bottom-40 left-1/3 size-[30rem] rounded-full bg-[#14b8a6]/15 blur-[120px]"
            ></div>

            <!-- concentric rings: refraction bends them visibly -->
            <div
                class="absolute top-1/2 right-[6%] size-[38rem] -translate-y-1/2"
            >
                <div
                    v-for="i in 6"
                    :key="i"
                    class="absolute rounded-full border border-white/[0.07]"
                    :style="{ inset: `${(i - 1) * 9}%` }"
                ></div>
            </div>

            <div
                class="absolute top-0 left-[58%] h-[140%] w-px origin-top rotate-[24deg] bg-gradient-to-b from-transparent via-white/25 to-transparent"
            ></div>
            <div
                class="absolute top-0 left-[72%] h-[140%] w-px origin-top rotate-[24deg] bg-gradient-to-b from-transparent via-[#e3ae45]/40 to-transparent"
            ></div>

            <p
                class="absolute bottom-[-0.12em] left-1/2 -translate-x-1/2 bg-gradient-to-b from-white/[0.09] to-white/0 bg-clip-text text-[19vw] leading-none font-bold tracking-tighter whitespace-nowrap text-transparent select-none"
            >
                STECHMAX
            </p>
        </div>

        <!-- floating glass orbs -->
        <LiquidGlassLens
            background="#hero-scene"
            :options="{ ...orbGlass, radius: 70 }"
            :float="22"
            :period="11"
            class="absolute top-[11%] left-[51%] hidden size-[140px] lg:block"
        />
        <LiquidGlassLens
            background="#hero-scene"
            :options="{ ...orbGlass, radius: 48 }"
            :float="16"
            :period="8"
            :phase="2"
            class="absolute bottom-[7%] left-[55%] hidden size-24 lg:block"
        />

        <div
            class="relative z-20 mx-auto grid w-full max-w-7xl items-center gap-14 px-6 pt-36 pb-24 lg:grid-cols-12 lg:pt-40"
        >
            <div class="lg:col-span-7">
                <a
                    href="https://academy.stechmax.com"
                    target="_blank"
                    rel="noopener"
                    class="inline-flex items-center gap-2 rounded-full px-4 py-1.5 text-xs font-medium tracking-wide text-white/80 glass transition hover:text-white"
                >
                    <Sparkles class="size-3.5 text-[#e7b955]" />
                    Digital Agency · Automation · Academy
                    <ArrowRight class="size-3.5" />
                </a>

                <h1
                    class="mt-8 text-[2.75rem] leading-[1.02] font-semibold tracking-[-0.035em] text-white sm:text-6xl lg:text-[5.25rem]"
                >
                    We design, build &amp;
                    <span class="text-gold font-display font-normal italic"
                        >automate</span
                    >
                    the digital engines of ambitious brands.
                </h1>

                <p class="mt-8 max-w-xl text-lg leading-relaxed text-white/60">
                    Stechmax is a digital agency crafting premium websites,
                    custom web applications and intelligent automations that
                    take repetitive work off your team’s plate — so you can
                    focus on growth.
                </p>

                <div class="mt-10 flex flex-wrap items-center gap-4">
                    <a
                        href="#contact"
                        class="group inline-flex items-center gap-2 rounded-full bg-gold px-7 py-4 font-semibold text-black shadow-[0_12px_40px_-10px_rgba(227,174,69,0.7)] transition hover:brightness-110"
                    >
                        Start a project
                        <ArrowRight
                            class="size-4 transition group-hover:translate-x-0.5"
                        />
                    </a>
                    <a
                        href="#services"
                        class="rounded-full px-7 py-4 font-medium text-white/90 glass transition hover:text-white"
                    >
                        Explore services
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5">
                <LiquidGlassLens
                    background="#hero-scene"
                    :options="cardGlass"
                    class="relative mx-auto max-w-md rounded-[32px]"
                >
                    <div class="p-8 sm:p-10">
                        <div class="flex items-center justify-between">
                            <span
                                class="text-xs font-medium tracking-[0.2em] text-white/50 uppercase"
                                >Studio status</span
                            >
                            <span
                                class="inline-flex items-center gap-2 rounded-full bg-emerald-400/10 px-3 py-1 text-xs font-medium text-emerald-300"
                            >
                                <span
                                    class="size-1.5 animate-pulse rounded-full bg-emerald-400"
                                ></span>
                                Taking new projects
                            </span>
                        </div>

                        <p
                            class="mt-8 font-display text-4xl leading-tight text-white"
                        >
                            Premium craft.<br />
                            <span class="text-white/50 italic"
                                >Measurable outcomes.</span
                            >
                        </p>

                        <ul class="mt-8 space-y-3">
                            <li
                                v-for="item in capabilities"
                                :key="item"
                                class="flex items-center gap-3 text-sm text-white/80"
                            >
                                <span
                                    class="flex size-6 items-center justify-center rounded-full bg-white/10"
                                >
                                    <Check class="size-3.5 text-[#e7b955]" />
                                </span>
                                {{ item }}
                            </li>
                        </ul>

                        <div
                            class="mt-10 grid grid-cols-3 gap-4 border-t border-white/10 pt-6"
                        >
                            <div>
                                <p class="text-2xl font-semibold text-white">
                                    150+
                                </p>
                                <p class="mt-1 text-xs text-white/50">
                                    Projects
                                </p>
                            </div>
                            <div>
                                <p class="text-2xl font-semibold text-white">
                                    10+
                                </p>
                                <p class="mt-1 text-xs text-white/50">Years</p>
                            </div>
                            <div>
                                <p class="text-2xl font-semibold text-white">
                                    98%
                                </p>
                                <p class="mt-1 text-xs text-white/50">
                                    Satisfaction
                                </p>
                            </div>
                        </div>
                    </div>
                </LiquidGlassLens>
            </div>
        </div>
    </section>
</template>
