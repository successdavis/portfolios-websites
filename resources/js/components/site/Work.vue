<script setup lang="ts">
import { ArrowUpRight } from 'lucide-vue-next';
import SectionHeading from './SectionHeading.vue';

const projects = [
    {
        title: 'Enterprise E-Commerce',
        category: 'E-Commerce · Payments',
        image: '/images/enterprise.jpg',
        span: 'lg:col-span-7',
    },
    {
        title: 'School Portal',
        category: 'Web App · Education',
        image: '/images/portal.jpg',
        span: 'lg:col-span-5',
    },
    {
        title: 'Corporate Website',
        category: 'Brand · CMS',
        image: 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1400&q=80',
        span: 'lg:col-span-5',
    },
    {
        title: 'Retail Store',
        category: 'Retail · POS',
        image: 'https://images.unsplash.com/photo-1545239351-1141bd82e8a6?auto=format&fit=crop&w=1400&q=80',
        span: 'lg:col-span-7',
    },
];
</script>

<template>
    <section id="work" class="mx-auto max-w-7xl px-6 py-28 lg:py-36">
        <div class="flex flex-wrap items-end justify-between gap-8">
            <SectionHeading
                align="left"
                eyebrow="Selected work"
                title="Built to perform,"
                accent="designed to impress."
            />
            <a
                href="#contact"
                class="inline-flex items-center gap-2 rounded-full px-6 py-3 text-sm font-medium text-white/85 glass transition hover:text-white"
            >
                Start yours <ArrowUpRight class="size-4" />
            </a>
        </div>

        <div class="mt-16 grid gap-6 lg:grid-cols-12">
            <article
                v-for="project in projects"
                :key="project.title"
                data-reveal
                class="group relative overflow-hidden rounded-3xl border border-white/10 bg-[#0b0d14]"
                :class="project.span"
            >
                <img
                    :src="project.image"
                    :alt="project.title"
                    loading="lazy"
                    class="h-80 w-full object-cover opacity-80 transition duration-700 group-hover:scale-105 group-hover:opacity-100 lg:h-[26rem]"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"
                ></div>
                <div
                    class="absolute inset-x-4 bottom-4 flex items-center justify-between gap-4 rounded-2xl px-5 py-4 glass"
                >
                    <div>
                        <p class="text-xs tracking-wide text-white/55">
                            {{ project.category }}
                        </p>
                        <h3 class="mt-1 text-lg font-semibold text-white">
                            {{ project.title }}
                        </h3>
                    </div>
                    <span
                        class="flex size-10 shrink-0 items-center justify-center rounded-full bg-white/10 text-white transition group-hover:bg-[#e3ae45] group-hover:text-black"
                    >
                        <ArrowUpRight class="size-4" />
                    </span>
                </div>
            </article>
        </div>
    </section>
</template>
