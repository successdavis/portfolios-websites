<script setup lang="ts">
import axios from 'axios';
import { ArrowUpRight, GraduationCap, MessageCircle } from 'lucide-vue-next';
import { reactive, ref } from 'vue';

const services = [
    'I need a business / corporate website',
    'I need an eCommerce website to sell products online',
    'I need a website for my school / institution',
    'I need a landing page for marketing or ads',
    'I need an online consultation / booking website',
    'I want to automate repetitive tasks in my business',
    'I need an AI assistant or chatbot',
    'I need a custom web application',
    'I need a POS system for my store',
    'I need API or payment gateway integration',
    'I need a website redesign or performance optimization',
    'I need hosting, server setup, or maintenance',
    'Other (please describe)',
];

const loading = ref(false);
const submitted = ref(false);
const error = ref('');
const form = reactive({
    full_name: '',
    email: '',
    service: '',
    message: '',
});

const submitForm = async () => {
    loading.value = true;
    error.value = '';

    try {
        await axios.post('/contact', form);
        submitted.value = true;
    } catch (e) {
        console.error(e);
        error.value =
            'Something went wrong while sending your message. Please try again or reach us on WhatsApp.';
    } finally {
        loading.value = false;
    }
};

const field =
    'w-full rounded-xl border border-white/10 bg-white/[0.04] px-4 py-3.5 text-white placeholder-white/30 transition focus:border-[#e3ae45]/60 focus:bg-white/[0.06] focus:ring-2 focus:ring-[#e3ae45]/20 focus:outline-none';
</script>

<template>
    <section id="contact" class="relative overflow-hidden py-28 lg:py-36">
        <div
            class="pointer-events-none absolute -bottom-40 left-1/2 size-[48rem] -translate-x-1/2 rounded-full bg-[#e3ae45]/10 blur-[140px]"
        ></div>

        <div
            class="relative mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-12"
        >
            <div data-reveal class="lg:col-span-5">
                <p
                    class="inline-flex items-center gap-3 text-xs font-medium tracking-[0.25em] text-[#e7b955] uppercase"
                >
                    <span class="h-px w-8 bg-[#e7b955]/60"></span>
                    Contact
                </p>
                <h2
                    class="mt-6 text-4xl leading-[1.05] font-semibold tracking-[-0.03em] text-white sm:text-5xl lg:text-6xl"
                >
                    Let’s build something
                    <span class="text-gold font-display font-normal italic"
                        >exceptional.</span
                    >
                </h2>
                <p class="mt-6 text-lg leading-relaxed text-white/55">
                    Tell us about your project. Our team will review your
                    request and get back to you with a tailored proposal.
                </p>

                <div class="mt-10 space-y-4">
                    <a
                        href="https://wa.me/2349078082348"
                        target="_blank"
                        rel="noopener"
                        class="flex items-center gap-4 rounded-2xl p-5 glass transition hover:border-[#e3ae45]/40"
                    >
                        <span
                            class="flex size-11 items-center justify-center rounded-xl bg-emerald-400/10"
                        >
                            <MessageCircle class="size-5 text-emerald-300" />
                        </span>
                        <span>
                            <span class="block font-medium text-white"
                                >Chat on WhatsApp</span
                            >
                            <span class="text-sm text-white/50"
                                >Prefer a quick conversation?</span
                            >
                        </span>
                        <ArrowUpRight class="ml-auto size-4 text-white/40" />
                    </a>
                    <a
                        href="https://academy.stechmax.com"
                        target="_blank"
                        rel="noopener"
                        class="flex items-center gap-4 rounded-2xl p-5 glass transition hover:border-[#e3ae45]/40"
                    >
                        <span
                            class="flex size-11 items-center justify-center rounded-xl bg-[#e3ae45]/10"
                        >
                            <GraduationCap class="size-5 text-[#e7b955]" />
                        </span>
                        <span>
                            <span class="block font-medium text-white"
                                >Looking to learn?</span
                            >
                            <span class="text-sm text-white/50"
                                >Enrol at academy.stechmax.com</span
                            >
                        </span>
                        <ArrowUpRight class="ml-auto size-4 text-white/40" />
                    </a>
                </div>
            </div>

            <div
                data-reveal
                class="rounded-[2rem] p-6 glass sm:p-10 lg:col-span-7"
            >
                <div v-if="submitted" class="py-12 text-center">
                    <h3 class="text-2xl font-semibold text-white">
                        Your message has been sent successfully
                    </h3>
                    <p class="mx-auto mt-4 max-w-md text-white/55">
                        One of our representatives will reach back to you
                        shortly. If you need an instant response, please chat
                        with us on WhatsApp.
                    </p>
                    <a
                        href="https://wa.me/2349078082348"
                        target="_blank"
                        rel="noopener"
                        class="mt-8 inline-flex items-center justify-center rounded-full bg-gold px-8 py-4 font-semibold text-black transition hover:brightness-110"
                    >
                        Chat on WhatsApp
                    </a>
                </div>

                <form v-else class="space-y-5" @submit.prevent="submitForm">
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label
                                for="full_name"
                                class="mb-2 block text-sm font-medium text-white/70"
                                >Full name</label
                            >
                            <input
                                id="full_name"
                                v-model="form.full_name"
                                type="text"
                                autocomplete="name"
                                placeholder="Your full name"
                                :class="field"
                                required
                            />
                        </div>
                        <div>
                            <label
                                for="email"
                                class="mb-2 block text-sm font-medium text-white/70"
                                >Email address</label
                            >
                            <input
                                id="email"
                                v-model="form.email"
                                type="email"
                                autocomplete="email"
                                placeholder="you@company.com"
                                :class="field"
                                required
                            />
                        </div>
                    </div>

                    <div>
                        <label
                            for="service"
                            class="mb-2 block text-sm font-medium text-white/70"
                            >What do you need?</label
                        >
                        <select
                            id="service"
                            v-model="form.service"
                            :class="field"
                            class="[&>option]:bg-[#0b0d14]"
                            required
                        >
                            <option value="" disabled>Select a service</option>
                            <option v-for="s in services" :key="s">
                                {{ s }}
                            </option>
                        </select>
                    </div>

                    <div>
                        <label
                            for="message"
                            class="mb-2 block text-sm font-medium text-white/70"
                            >Project details</label
                        >
                        <textarea
                            id="message"
                            v-model="form.message"
                            rows="5"
                            placeholder="Tell us about your project, timeline or the tasks you want to automate…"
                            :class="field"
                            required
                        ></textarea>
                    </div>

                    <p
                        v-if="error"
                        class="rounded-xl border border-red-400/20 bg-red-400/10 px-4 py-3 text-sm text-red-200"
                        role="alert"
                    >
                        {{ error }}
                    </p>

                    <button
                        type="submit"
                        :disabled="loading"
                        class="w-full rounded-full bg-gold px-10 py-4 font-semibold text-black shadow-[0_12px_40px_-12px_rgba(227,174,69,0.7)] transition hover:brightness-110 disabled:opacity-60 sm:w-auto"
                    >
                        {{ loading ? 'Sending…' : 'Send message' }}
                    </button>
                </form>
            </div>
        </div>
    </section>
</template>
