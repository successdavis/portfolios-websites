<template>
    <div class="bg-[#0B0F1A] font-sans text-gray-100">
        <!-- HERO -->
        <Hero />

        <!-- TRUST STATS -->
        <section class="border-y border-gray-800 bg-[#020617]">
            <div
                class="mx-auto grid max-w-7xl grid-cols-2 gap-8 px-6 py-12 text-center md:grid-cols-4"
            >
                <Stat label="Projects Delivered" value="150+" />
                <Stat label="Years Experience" value="10+" />
                <Stat label="Industries Served" value="12+" />
                <Stat label="Client Satisfaction" value="98%" />
            </div>
        </section>

        <!-- SERVICES -->
        <Services />

        <!-- PROJECTS (FULL BLEED) -->
        <section id="projects" class="w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <ProjectCard
                    title="Enterprise E‑Commerce"
                    image="/images/enterprise.jpg"
                    link="#"
                    bg="bg-[#1A1F36]"
                />
                <ProjectCard
                    title="School Portal"
                    image="/images/portal.jpg"
                    link="#"
                    bg="bg-[#111827]"
                />
                <ProjectCard
                    title="Corporate Website"
                    image="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
                    link="#"
                    bg="bg-[#2A1F1D]"
                />
                <ProjectCard
                    title="Retail Store"
                    image="https://images.unsplash.com/photo-1545239351-1141bd82e8a6"
                    link="#"
                    bg="bg-[#1F2937]"
                />
            </div>
        </section>

        <section id="team" class="mx-auto max-w-7xl px-6 py-28">
            <!-- Section Header -->
            <div class="mb-20 text-center">
                <h2 class="text-4xl font-bold text-white">
                    Meet the Experts Behind Stechmax
                </h2>
                <p class="mx-auto mt-6 max-w-2xl text-gray-400">
                    A multidisciplinary team of designers, engineers, and
                    strategists committed to building high-impact digital
                    solutions.
                </p>
            </div>

            <!-- Team Grid -->
            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Team Member -->
                <div
                    class="group rounded-2xl bg-neutral-900/80 p-6 text-center shadow-lg backdrop-blur transition hover:shadow-2xl"
                >
                    <div
                        class="relative mb-6 aspect-square w-full overflow-hidden rounded-xl"
                    >
                        <img
                            src="/images/success.webp"
                            alt="John Doe"
                            class="h-full w-full object-cover transition duration-300 group-hover:scale-105"
                        />
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        Ikong Simon
                    </h3>
                    <p class="mt-1 font-medium text-amber-500">
                        Lead Software Engineer
                    </p>
                    <p class="mt-3 text-sm text-gray-400">
                        Specializes in scalable web systems, API architecture,
                        and performance-driven solutions.
                    </p>
                </div>

                <!-- Team Member -->
                <div
                    class="group rounded-2xl bg-neutral-900/80 p-6 text-center shadow-lg backdrop-blur transition hover:shadow-2xl"
                >
                    <div
                        class="relative mb-6 aspect-square w-full overflow-hidden rounded-xl"
                    >
                        <img
                            src="/images/alex.webp"
                            alt="Jane Smith"
                            class="h-full w-full object-cover transition duration-300 group-hover:scale-105"
                        />
                    </div>
                    <h3 class="text-lg font-semibold text-white">David Alex</h3>
                    <p class="mt-1 font-medium text-amber-500">
                        UI / UX Designer
                    </p>
                    <p class="mt-3 text-sm text-gray-400">
                        Focused on user-centered design, accessibility, and
                        premium brand experiences.
                    </p>
                </div>

                <!-- Team Member -->
                <div
                    class="group rounded-2xl bg-neutral-900/80 p-6 text-center shadow-lg backdrop-blur transition hover:shadow-2xl"
                >
                    <div
                        class="relative mb-6 aspect-square w-full overflow-hidden rounded-xl"
                    >
                        <img
                            src="/images/israel.webp"
                            alt="Michael Lee"
                            class="h-full w-full object-cover transition duration-300 group-hover:scale-105"
                        />
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        Israel Atuo
                    </h3>
                    <p class="mt-1 font-medium text-amber-500">
                        Backend & DevOps Engineer
                    </p>
                    <p class="mt-3 text-sm text-gray-400">
                        Handles server infrastructure, security, CI/CD
                        pipelines, and cloud deployments.
                    </p>
                </div>

                <!-- Team Member -->
                <div
                    class="group rounded-2xl bg-neutral-900/80 p-6 text-center shadow-lg backdrop-blur transition hover:shadow-2xl"
                >
                    <div
                        class="relative mb-6 aspect-square w-full overflow-hidden rounded-xl"
                    >
                        <img
                            src="/images/resa.webp"
                            alt="Sarah Ade"
                            class="h-full w-full object-cover transition duration-300 group-hover:scale-105"
                        />
                    </div>
                    <h3 class="text-lg font-semibold text-white">
                        Theresa Ushie
                    </h3>
                    <p class="mt-1 font-medium text-amber-500">
                        Digital Product Manager
                    </p>
                    <p class="mt-3 text-sm text-gray-400">
                        Oversees product strategy, client communication, and
                        delivery timelines.
                    </p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <ContactUs />

        <footer class="bg-black py-10 text-center text-gray-500">
            © {{ new Date().getFullYear() }} Stechmax Ltd
        </footer>
    </div>
</template>

<script setup>
import ProjectCard from '@/components/ProjectCard.vue';
import Stat from '@/components/Stat.vue';
import ContactUs from '@/pages/ContactUs.vue';
import Hero from '@/pages/Hero.vue';
import Services from '@/pages/Services.vue';
</script>
