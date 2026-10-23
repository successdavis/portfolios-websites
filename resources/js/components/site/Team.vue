<script setup lang="ts">
import SectionHeading from './SectionHeading.vue';

const team = [
    {
        name: 'Ikong Simon',
        role: 'Lead Software Engineer',
        image: '/images/success.webp',
        bio: 'Scalable web systems, API architecture and performance-driven solutions.',
    },
    {
        name: 'David Alex',
        role: 'UI / UX Designer',
        image: '/images/alex.webp',
        bio: 'User-centred design, accessibility and premium brand experiences.',
    },
    {
        name: 'Israel Atuo',
        role: 'Backend & DevOps Engineer',
        image: '/images/israel.webp',
        bio: 'Server infrastructure, security, CI/CD pipelines and cloud deployments.',
    },
    {
        name: 'Theresa Ushie',
        role: 'Digital Product Manager',
        image: '/images/resa.webp',
        bio: 'Product strategy, client communication and delivery timelines.',
    },
];
</script>

<template>
    <section id="team" class="mx-auto max-w-7xl px-6 py-28 lg:py-36">
        <SectionHeading
            eyebrow="The team"
            title="The experts behind"
            accent="Stechmax."
            copy="A multidisciplinary team of designers, engineers and strategists committed to building high-impact digital solutions."
        />

        <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <article
                v-for="member in team"
                :key="member.name"
                data-reveal
                class="group overflow-hidden rounded-3xl p-3 glass"
            >
                <div
                    class="relative aspect-[4/5] overflow-hidden rounded-[1.25rem]"
                >
                    <img
                        :src="member.image"
                        :alt="member.name"
                        loading="lazy"
                        class="h-full w-full object-cover grayscale-[35%] transition duration-700 group-hover:scale-105 group-hover:grayscale-0"
                    />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"
                    ></div>
                </div>
                <div class="px-3 pt-5 pb-4">
                    <h3 class="text-lg font-semibold text-white">
                        {{ member.name }}
                    </h3>
                    <p class="mt-0.5 text-sm text-[#e7b955]">
                        {{ member.role }}
                    </p>
                    <p class="mt-3 text-sm leading-relaxed text-white/50">
                        {{ member.bio }}
                    </p>
                </div>
            </article>
        </div>
    </section>
</template>
