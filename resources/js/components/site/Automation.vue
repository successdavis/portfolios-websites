<script setup lang="ts">
import {
    BellRing,
    FileSpreadsheet,
    Inbox,
    ReceiptText,
    UserRoundCheck,
} from 'lucide-vue-next';
import SectionHeading from './SectionHeading.vue';

const steps = [
    {
        icon: Inbox,
        title: 'New order or enquiry',
        meta: 'Website · WhatsApp · Email',
    },
    {
        icon: UserRoundCheck,
        title: 'Customer added to CRM',
        meta: 'Tagged & assigned instantly',
    },
    {
        icon: ReceiptText,
        title: 'Invoice generated & sent',
        meta: 'Paystack · Flutterwave · Stripe',
    },
    { icon: BellRing, title: 'Team notified', meta: 'Slack · WhatsApp · SMS' },
    {
        icon: FileSpreadsheet,
        title: 'Reports updated',
        meta: 'Sheets · dashboards · BI',
    },
];

const benefits = [
    {
        title: 'Audit',
        copy: 'We shadow your workflows and pinpoint the tasks costing you the most hours.',
    },
    {
        title: 'Automate',
        copy: 'We connect your apps with robust automations, custom scripts and AI where it adds value.',
    },
    {
        title: 'Monitor',
        copy: 'Every workflow is documented, monitored and supported, so nothing silently breaks.',
    },
];
</script>

<template>
    <section id="automation" class="relative overflow-hidden py-28 lg:py-36">
        <div
            class="pointer-events-none absolute top-1/2 left-1/2 size-[50rem] -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#6d4aff]/10 blur-[140px]"
        ></div>

        <div
            class="relative mx-auto grid max-w-7xl items-center gap-16 px-6 lg:grid-cols-2"
        >
            <div>
                <SectionHeading
                    align="left"
                    eyebrow="Automation"
                    title="Stop doing the same task"
                    accent="twice."
                    copy="Copy-pasting between apps, chasing invoices, sending the same follow-up email — your team’s time is too valuable for that. We build automations that work quietly in the background, every hour of every day."
                />

                <div class="mt-12 grid gap-6 sm:grid-cols-3">
                    <div
                        v-for="(b, i) in benefits"
                        :key="b.title"
                        data-reveal
                        class="border-l border-white/10 pl-5"
                    >
                        <p class="font-display text-lg text-[#e7b955] italic">
                            0{{ i + 1 }}
                        </p>
                        <p class="mt-2 font-semibold text-white">
                            {{ b.title }}
                        </p>
                        <p class="mt-2 text-sm leading-relaxed text-white/55">
                            {{ b.copy }}
                        </p>
                    </div>
                </div>
            </div>

            <div data-reveal class="relative rounded-[2rem] p-6 glass sm:p-8">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-white">
                        Order-to-cash workflow
                    </p>
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-emerald-400/10 px-3 py-1 text-xs text-emerald-300"
                    >
                        <span
                            class="size-1.5 animate-pulse rounded-full bg-emerald-400"
                        ></span>
                        Running
                    </span>
                </div>

                <ol class="relative mt-8 space-y-4">
                    <span
                        class="absolute top-6 bottom-6 left-[1.4rem] w-px bg-gradient-to-b from-[#e7b955]/70 via-white/15 to-[#6d4aff]/60"
                        aria-hidden="true"
                    ></span>
                    <li
                        v-for="step in steps"
                        :key="step.title"
                        class="relative flex items-center gap-4 rounded-2xl border border-white/[0.06] bg-white/[0.03] p-3 pr-5"
                    >
                        <span
                            class="relative flex size-11 shrink-0 items-center justify-center rounded-xl border border-white/10 bg-[#0b0d14]"
                        >
                            <component
                                :is="step.icon"
                                class="size-5 text-[#e7b955]"
                            />
                        </span>
                        <div class="min-w-0">
                            <p class="truncate text-sm font-medium text-white">
                                {{ step.title }}
                            </p>
                            <p class="truncate text-xs text-white/45">
                                {{ step.meta }}
                            </p>
                        </div>
                        <span
                            class="ml-auto hidden text-xs text-white/30 sm:block"
                            >auto</span
                        >
                    </li>
                </ol>
            </div>
        </div>
    </section>
</template>
