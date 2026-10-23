<script setup lang="ts">
import {
    ArrowUpRight,
    Code2,
    MonitorSmartphone,
    Workflow,
} from 'lucide-vue-next';
import SectionHeading from './SectionHeading.vue';

const pillars = [
    {
        icon: MonitorSmartphone,
        index: '01',
        title: 'Website Design & Development',
        copy: 'Brand-defining websites that load fast, rank well and convert — designed pixel by pixel and engineered to scale.',
        items: [
            'Corporate & brand websites',
            'E-commerce & online stores',
            'WordPress & headless CMS',
            'Landing pages for campaigns',
        ],
    },
    {
        icon: Workflow,
        index: '02',
        title: 'Automation & AI Workflows',
        copy: 'We map the repetitive tasks slowing your team down and replace them with reliable, always-on automations.',
        items: [
            'Lead capture & CRM sync',
            'Invoicing, reports & data entry',
            'Email, SMS & WhatsApp follow-ups',
            'AI assistants & chatbots',
        ],
    },
    {
        icon: Code2,
        index: '03',
        title: 'Custom Software & Integrations',
        copy: 'Bespoke platforms built around how your business actually works, connected to the tools you already use.',
        items: [
            'Web apps, portals & dashboards',
            'REST APIs & third-party integrations',
            'Payment gateways & POS systems',
            'Hosting, security & maintenance',
        ],
    },
];

const solutions = [
    'School Portals',
    'E-Commerce Platforms',
    'Online Retail Stores',
    'Booking & Consultation Sites',
    'POS Systems',
    'Payment & SMS Integrations',
    'Redesigns & Speed Optimisation',
    'Managed Hosting',
];
</script>

<template>
    <section
        id="services"
        class="relative mx-auto max-w-7xl px-6 py-28 lg:py-36"
    >
        <SectionHeading
            eyebrow="What we do"
            title="One partner for everything"
            accent="digital."
            copy="From the first wireframe to the last automated workflow, we handle strategy, design, engineering and ongoing support under one roof."
        />

        <div class="mt-16 grid gap-6 lg:grid-cols-3">
            <article
                v-for="pillar in pillars"
                :key="pillar.title"
                data-reveal
                class="group relative flex flex-col overflow-hidden rounded-3xl p-8 glass transition duration-500 hover:-translate-y-1 hover:border-[#e3ae45]/40"
            >
                <div
                    class="pointer-events-none absolute -top-24 -right-24 size-56 rounded-full bg-[#e3ae45]/0 blur-3xl transition duration-700 group-hover:bg-[#e3ae45]/20"
                ></div>
                <div class="flex items-center justify-between">
                    <span
                        class="flex size-12 items-center justify-center rounded-2xl border border-white/10 bg-white/5"
                    >
                        <component
                            :is="pillar.icon"
                            class="size-5 text-[#e7b955]"
                        />
                    </span>
                    <span class="font-display text-2xl text-white/25 italic">
                        {{ pillar.index }}
                    </span>
                </div>
                <h3
                    class="mt-8 text-2xl font-semibold tracking-tight text-white"
                >
                    {{ pillar.title }}
                </h3>
                <p class="mt-4 leading-relaxed text-white/60">
                    {{ pillar.copy }}
                </p>
                <ul class="mt-8 space-y-3 border-t border-white/10 pt-6">
                    <li
                        v-for="item in pillar.items"
                        :key="item"
                        class="flex items-center gap-3 text-sm text-white/75"
                    >
                        <span class="size-1 rounded-full bg-[#e7b955]"></span>
                        {{ item }}
                    </li>
                </ul>
                <a
                    href="#contact"
                    class="mt-auto inline-flex items-center gap-1.5 pt-10 text-sm font-medium text-white/80 transition hover:text-[#e7b955]"
                >
                    Discuss your project <ArrowUpRight class="size-4" />
                </a>
            </article>
        </div>

        <div data-reveal class="mt-10 flex flex-wrap justify-center gap-3">
            <span
                v-for="item in solutions"
                :key="item"
                class="rounded-full border border-white/10 bg-white/[0.03] px-4 py-2 text-sm text-white/60"
            >
                {{ item }}
            </span>
        </div>
    </section>
</template>
