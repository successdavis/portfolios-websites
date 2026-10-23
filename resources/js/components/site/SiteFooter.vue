<script setup lang="ts">
import BrandMark from './BrandMark.vue';

const columns = [
    {
        title: 'Services',
        links: [
            { label: 'Website Design', href: '#services' },
            { label: 'Web Development', href: '#services' },
            { label: 'Automation & AI', href: '#automation' },
            { label: 'Custom Software', href: '#services' },
        ],
    },
    {
        title: 'Company',
        links: [
            { label: 'Work', href: '#work' },
            { label: 'Process', href: '#process' },
            { label: 'Team', href: '#team' },
            { label: 'Contact', href: '#contact' },
        ],
    },
    {
        title: 'Learn',
        links: [
            { label: 'Stechmax Academy', href: 'https://academy.stechmax.com' },
            { label: 'FAQ', href: '#faq' },
        ],
    },
];

const year = new Date().getFullYear();
</script>

<template>
    <footer class="border-t border-white/[0.06] bg-[#040507]">
        <div class="mx-auto max-w-7xl px-6 pt-20 pb-10">
            <div class="grid gap-12 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <a href="#top" class="flex items-center gap-2.5">
                        <BrandMark class="size-9" />
                        <span class="text-xl font-semibold text-white"
                            >Stechmax</span
                        >
                    </a>
                    <p class="mt-6 max-w-sm leading-relaxed text-white/50">
                        A digital agency for websites, web applications and
                        automation — with an academy that teaches the same
                        skills.
                    </p>
                </div>
                <div
                    v-for="col in columns"
                    :key="col.title"
                    class="lg:col-span-2"
                >
                    <p
                        class="text-xs font-medium tracking-[0.2em] text-white/40 uppercase"
                    >
                        {{ col.title }}
                    </p>
                    <ul class="mt-5 space-y-3">
                        <li v-for="link in col.links" :key="link.label">
                            <a
                                :href="link.href"
                                :target="
                                    link.href.startsWith('http')
                                        ? '_blank'
                                        : undefined
                                "
                                :rel="
                                    link.href.startsWith('http')
                                        ? 'noopener'
                                        : undefined
                                "
                                class="text-sm text-white/65 transition hover:text-white"
                                >{{ link.label }}</a
                            >
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-16 hairline"></div>

            <div
                class="mt-8 flex flex-col justify-between gap-4 text-sm text-white/40 sm:flex-row"
            >
                <p>© {{ year }} Stechmax Ltd. All rights reserved.</p>
                <p>stechmax.com</p>
            </div>
        </div>
    </footer>
</template>
