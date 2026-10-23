<script setup lang="ts">
import { ArrowUpRight, GraduationCap } from 'lucide-vue-next';
import LiquidGlassLens from './LiquidGlassLens.vue';

const tracks = ['Web Design', 'Web Development', 'Automation & AI'];

const lensGlass = {
    radius: 36,
    scale: 56,
    depth: 52,
    curvature: 3.6,
    chroma: 0.16,
    blur: 2,
    glow: 0.14,
    edge: 0.8,
    tint: 0.03,
};
</script>

<template>
    <section id="academy" class="px-4 py-12 sm:px-6">
        <div
            class="relative mx-auto max-w-7xl overflow-hidden rounded-[2.5rem] border border-white/10"
        >
            <!-- Static scene refracted by the academy lens -->
            <div
                id="academy-scene"
                class="pointer-events-none absolute inset-0 overflow-hidden bg-[#08070f]"
                aria-hidden="true"
            >
                <div
                    class="absolute inset-0 bg-grid [mask-image:linear-gradient(to_bottom,black,transparent)] opacity-70"
                ></div>
                <div
                    class="absolute -top-32 -left-24 size-[32rem] rounded-full bg-[#6d4aff]/35 blur-[110px]"
                ></div>
                <div
                    class="absolute -right-24 -bottom-40 size-[34rem] rounded-full bg-[#e3ae45]/30 blur-[110px]"
                ></div>
                <div
                    class="absolute top-1/2 right-[8%] size-72 -translate-y-1/2 rounded-full border-[18px] border-white/[0.06]"
                ></div>
                <div
                    class="absolute top-[10%] right-[36%] hidden size-28 rounded-full bg-gradient-to-br from-[#a78bfa] to-[#6d4aff] opacity-70 lg:block"
                ></div>
                <p
                    class="absolute top-1/2 right-[-0.05em] -translate-y-1/2 font-display text-[22vw] leading-none text-white/[0.06] italic select-none lg:text-[15rem]"
                >
                    Academy
                </p>
            </div>

            <div
                class="relative grid items-center gap-12 p-8 sm:p-12 lg:grid-cols-2 lg:p-20"
            >
                <div data-reveal>
                    <p
                        class="inline-flex items-center gap-3 text-xs font-medium tracking-[0.25em] text-[#e7b955] uppercase"
                    >
                        <span class="h-px w-8 bg-[#e7b955]/60"></span>
                        Stechmax Academy
                    </p>
                    <h2
                        class="mt-6 text-4xl leading-[1.05] font-semibold tracking-[-0.03em] text-white sm:text-5xl"
                    >
                        Learn the skills we use
                        <span class="text-gold font-display font-normal italic"
                            >every day.</span
                        >
                    </h2>
                    <p
                        class="mt-6 max-w-lg text-lg leading-relaxed text-white/60"
                    >
                        Our academy turns real agency experience into hands-on
                        training — taught by the people who build and automate
                        for clients every day.
                    </p>
                </div>

                <LiquidGlassLens
                    background="#academy-scene"
                    :options="lensGlass"
                    class="relative w-full max-w-md justify-self-center rounded-[36px] lg:justify-self-end"
                >
                    <div class="p-8 sm:p-10">
                        <span
                            class="flex size-12 items-center justify-center rounded-2xl bg-white/10"
                        >
                            <GraduationCap class="size-6 text-[#e7b955]" />
                        </span>
                        <p class="mt-6 text-sm text-white/55">
                            Learning tracks
                        </p>
                        <ul class="mt-4 flex flex-wrap gap-2">
                            <li
                                v-for="track in tracks"
                                :key="track"
                                class="rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm text-white"
                            >
                                {{ track }}
                            </li>
                        </ul>
                        <a
                            href="https://academy.stechmax.com"
                            target="_blank"
                            rel="noopener"
                            class="mt-10 flex items-center justify-center gap-2 rounded-full bg-gold px-6 py-4 font-semibold text-black transition hover:brightness-110"
                        >
                            Visit the Academy
                            <ArrowUpRight class="size-4" />
                        </a>
                    </div>
                </LiquidGlassLens>
            </div>
        </div>
    </section>
</template>
