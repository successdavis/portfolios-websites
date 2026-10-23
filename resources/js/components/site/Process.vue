<script setup lang="ts">
import SectionHeading from './SectionHeading.vue';

const steps = [
    {
        title: 'Discover',
        copy: 'We dig into your goals, users and workflows to define scope, timelines and success metrics.',
    },
    {
        title: 'Design',
        copy: 'Wireframes, brand-aligned UI and interactive prototypes you can click through before we build.',
    },
    {
        title: 'Build',
        copy: 'Clean, tested, secure code — with weekly demos so you always know exactly where things stand.',
    },
    {
        title: 'Automate & Scale',
        copy: 'Launch, connect your tools, automate the busywork and keep improving with ongoing support.',
    },
];
</script>

<template>
    <section
        id="process"
        class="relative border-y border-white/[0.06] bg-[#05060a]"
    >
        <div class="mx-auto max-w-7xl px-6 py-28 lg:py-36">
            <SectionHeading
                eyebrow="How we work"
                title="A proven process,"
                accent="zero guesswork."
            />

            <ol
                class="mt-20 grid gap-px overflow-hidden rounded-3xl border border-white/[0.06] bg-white/[0.06] md:grid-cols-2 lg:grid-cols-4"
            >
                <li
                    v-for="(step, i) in steps"
                    :key="step.title"
                    data-reveal
                    class="relative bg-[#05060a] p-8 lg:p-10"
                >
                    <p
                        class="font-display text-6xl text-white/10 italic"
                        aria-hidden="true"
                    >
                        0{{ i + 1 }}
                    </p>
                    <h3 class="mt-6 text-xl font-semibold text-white">
                        {{ step.title }}
                    </h3>
                    <p class="mt-3 text-sm leading-relaxed text-white/55">
                        {{ step.copy }}
                    </p>
                </li>
            </ol>
        </div>
    </section>
</template>
