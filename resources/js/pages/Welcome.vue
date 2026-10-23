<script setup lang="ts">
import Academy from '@/components/site/Academy.vue';
import Automation from '@/components/site/Automation.vue';
import ContactUs from '@/components/site/ContactUs.vue';
import Faq from '@/components/site/Faq.vue';
import Hero from '@/components/site/Hero.vue';
import Process from '@/components/site/Process.vue';
import Services from '@/components/site/Services.vue';
import SiteFooter from '@/components/site/SiteFooter.vue';
import SiteHeader from '@/components/site/SiteHeader.vue';
import Team from '@/components/site/Team.vue';
import Work from '@/components/site/Work.vue';
import { Head } from '@inertiajs/vue3';
import { onBeforeUnmount, onMounted } from 'vue';

defineProps<{ canRegister?: boolean }>();

const description =
    'Stechmax is a digital agency for premium website design & development, custom web applications and business process automation — plus Stechmax Academy, where we teach these skills.';

const stack = [
    'Laravel',
    'Vue',
    'React',
    'Next.js',
    'WordPress',
    'Shopify',
    'Tailwind CSS',
    'Node.js',
    'Python',
    'n8n',
    'Zapier',
    'Make',
    'OpenAI',
    'Paystack',
    'Flutterwave',
    'AWS',
];

const stats = [
    { value: '150+', label: 'Projects delivered' },
    { value: '10+', label: 'Years of experience' },
    { value: '12+', label: 'Industries served' },
    { value: '98%', label: 'Client satisfaction' },
];

let observer: IntersectionObserver | null = null;

onMounted(() => {
    observer = new IntersectionObserver(
        (entries) => {
            for (const entry of entries) {
                if (!entry.isIntersecting) continue;
                entry.target.classList.add('is-visible');
                observer?.unobserve(entry.target);
            }
        },
        { threshold: 0.12, rootMargin: '0px 0px -40px 0px' },
    );
    document
        .querySelectorAll('[data-reveal]')
        .forEach((el) => observer?.observe(el));
});

onBeforeUnmount(() => observer?.disconnect());
</script>

<template>
    <Head title="Digital Agency — Web Design, Development & Automation">
        <meta
            head-key="description"
            name="description"
            :content="description"
        />
        <link
            head-key="canonical"
            rel="canonical"
            href="https://stechmax.com/"
        />
        <meta head-key="og:type" property="og:type" content="website" />
        <meta
            head-key="og:site_name"
            property="og:site_name"
            content="Stechmax"
        />
        <meta
            head-key="og:title"
            property="og:title"
            content="Stechmax — Digital Agency for Web Design, Development & Automation"
        />
        <meta
            head-key="og:description"
            property="og:description"
            :content="description"
        />
        <meta
            head-key="og:url"
            property="og:url"
            content="https://stechmax.com/"
        />
        <meta
            head-key="twitter:card"
            name="twitter:card"
            content="summary_large_image"
        />
        <meta head-key="theme-color" name="theme-color" content="#07080c" />
    </Head>

    <div
        class="min-h-screen bg-[#07080c] font-sans text-white antialiased selection:bg-[#e3ae45]/30"
    >
        <SiteHeader />

        <main>
            <Hero />

            <!-- Technology marquee -->
            <section
                class="relative border-y border-white/[0.06] bg-[#05060a] py-8"
                aria-label="Technologies we work with"
            >
                <div
                    class="overflow-hidden [mask-image:linear-gradient(90deg,transparent,black_12%,black_88%,transparent)]"
                >
                    <ul class="animate-marquee flex w-max gap-14 pr-14">
                        <li
                            v-for="(tech, i) in [...stack, ...stack]"
                            :key="i"
                            :aria-hidden="i >= stack.length"
                            class="text-lg font-medium whitespace-nowrap text-white/35"
                        >
                            {{ tech }}
                        </li>
                    </ul>
                </div>
            </section>

            <Services />

            <Automation />

            <!-- Stats -->
            <section class="mx-auto max-w-7xl px-6">
                <div
                    data-reveal
                    class="grid grid-cols-2 gap-px overflow-hidden rounded-3xl glass lg:grid-cols-4"
                >
                    <div
                        v-for="stat in stats"
                        :key="stat.label"
                        class="px-6 py-10 text-center"
                    >
                        <p class="text-gold font-display text-5xl lg:text-6xl">
                            {{ stat.value }}
                        </p>
                        <p class="mt-3 text-sm text-white/50">
                            {{ stat.label }}
                        </p>
                    </div>
                </div>
            </section>

            <Work />

            <Process />

            <Team />

            <Academy />

            <Faq />

            <ContactUs />
        </main>

        <SiteFooter />
    </div>
</template>
