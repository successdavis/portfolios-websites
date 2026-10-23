<script setup lang="ts">
import { Plus } from 'lucide-vue-next';
import SectionHeading from './SectionHeading.vue';

const faqs = [
    {
        q: 'How long does a typical project take?',
        a: 'It depends on scope. After a short discovery call we share a detailed timeline and milestones, so you know exactly when to expect each deliverable.',
    },
    {
        q: 'Which tasks can you automate for my business?',
        a: 'Anything rule-based and repetitive: lead capture, CRM updates, invoicing, payment reminders, reporting, onboarding emails, inventory alerts and more. We start with an audit to find the biggest time savings.',
    },
    {
        q: 'Do you work with international clients?',
        a: 'Yes. We collaborate remotely with clients across different time zones, with regular check-ins and shared project boards.',
    },
    {
        q: 'Will I be able to manage my website myself?',
        a: 'Absolutely. We build on easy-to-use CMS platforms where it makes sense and hand over with training and documentation.',
    },
    {
        q: 'Do you offer support after launch?',
        a: 'Yes — hosting, security updates, monitoring and continuous improvements are available through our maintenance plans.',
    },
    {
        q: 'Where can I learn these skills myself?',
        a: 'Through Stechmax Academy at academy.stechmax.com, where we teach web design, development and automation.',
    },
];
</script>

<template>
    <section id="faq" class="mx-auto max-w-4xl px-6 py-28 lg:py-36">
        <SectionHeading eyebrow="FAQ" title="Questions," accent="answered." />

        <div class="mt-14 space-y-3">
            <details
                v-for="item in faqs"
                :key="item.q"
                data-reveal
                class="group rounded-2xl px-6 py-5 glass [&_summary::-webkit-details-marker]:hidden"
            >
                <summary
                    class="flex cursor-pointer list-none items-center justify-between gap-6 font-medium text-white"
                >
                    {{ item.q }}
                    <Plus
                        class="size-5 shrink-0 text-[#e7b955] transition duration-300 group-open:rotate-45"
                    />
                </summary>
                <p class="mt-4 leading-relaxed text-white/60">{{ item.a }}</p>
            </details>
        </div>
    </section>
</template>
