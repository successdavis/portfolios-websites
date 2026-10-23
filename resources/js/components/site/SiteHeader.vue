<script setup lang="ts">
import { ArrowUpRight, Menu, X } from 'lucide-vue-next';
import { onBeforeUnmount, onMounted, ref } from 'vue';
import BrandMark from './BrandMark.vue';

const links = [
    { label: 'Services', href: '#services' },
    { label: 'Automation', href: '#automation' },
    { label: 'Work', href: '#work' },
    { label: 'Process', href: '#process' },
    { label: 'Team', href: '#team' },
];

const scrolled = ref(false);
const open = ref(false);

const onScroll = () => {
    scrolled.value = window.scrollY > 24;
};

onMounted(() => {
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
});

onBeforeUnmount(() => window.removeEventListener('scroll', onScroll));
</script>

<template>
    <header class="fixed inset-x-0 top-0 z-50 px-4 pt-4 sm:px-6">
        <nav
            class="mx-auto flex max-w-7xl items-center justify-between rounded-2xl px-4 py-3 transition-all duration-500 sm:px-6"
            :class="scrolled || open ? 'glass' : 'border border-transparent'"
            aria-label="Main"
        >
            <a
                href="#top"
                class="flex items-center gap-2.5"
                aria-label="Stechmax home"
            >
                <BrandMark class="size-8" />
                <span class="text-lg font-semibold tracking-tight text-white">
                    Stechmax
                </span>
            </a>

            <ul class="hidden items-center gap-8 text-sm text-white/70 lg:flex">
                <li v-for="link in links" :key="link.href">
                    <a :href="link.href" class="transition hover:text-white">
                        {{ link.label }}
                    </a>
                </li>
                <li>
                    <a
                        href="https://academy.stechmax.com"
                        target="_blank"
                        rel="noopener"
                        class="inline-flex items-center gap-1 transition hover:text-white"
                    >
                        Academy
                        <ArrowUpRight class="size-3.5" />
                    </a>
                </li>
            </ul>

            <div class="flex items-center gap-3">
                <a
                    href="#contact"
                    class="hidden rounded-full bg-gold px-5 py-2.5 text-sm font-semibold text-black shadow-[0_8px_30px_-8px_rgba(227,174,69,0.6)] transition hover:brightness-110 sm:inline-flex"
                >
                    Start a project
                </a>
                <button
                    type="button"
                    class="inline-flex size-10 items-center justify-center rounded-full border border-white/10 text-white lg:hidden"
                    :aria-expanded="open"
                    aria-label="Toggle menu"
                    @click="open = !open"
                >
                    <X v-if="open" class="size-5" />
                    <Menu v-else class="size-5" />
                </button>
            </div>
        </nav>

        <div
            v-if="open"
            class="mx-auto mt-2 max-w-7xl rounded-2xl p-4 glass lg:hidden"
        >
            <ul class="grid gap-1 text-white/80">
                <li v-for="link in links" :key="link.href">
                    <a
                        :href="link.href"
                        class="block rounded-xl px-4 py-3 hover:bg-white/5"
                        @click="open = false"
                    >
                        {{ link.label }}
                    </a>
                </li>
                <li>
                    <a
                        href="https://academy.stechmax.com"
                        target="_blank"
                        rel="noopener"
                        class="flex items-center gap-1 rounded-xl px-4 py-3 hover:bg-white/5"
                    >
                        Academy <ArrowUpRight class="size-4" />
                    </a>
                </li>
                <li class="pt-2">
                    <a
                        href="#contact"
                        class="block rounded-xl bg-gold px-4 py-3 text-center font-semibold text-black"
                        @click="open = false"
                    >
                        Start a project
                    </a>
                </li>
            </ul>
        </div>
    </header>
</template>
