<template>
    <section id="contact" class="max-w-7xl mx-auto px-6 py-28">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white">
                Let’s Build Something Exceptional
            </h2>
            <p class="mt-6 text-gray-400 max-w-2xl mx-auto">
                Tell us about your project. Our team will review your request and get back to you with a tailored
                solution.
            </p>
        </div>

        <div class="max-w-3xl mx-auto bg-neutral-900/80 backdrop-blur rounded-2xl p-5 lg:p-10 shadow-xl">
            <!-- SUCCESS MESSAGE -->
            <div v-if="submitted" class="text-center py-12">
                <h3 class="text-2xl font-semibold text-white mb-4">
                    Your message has been sent successfully
                </h3>

                <p class="text-gray-400 max-w-xl mx-auto mb-6">
                    One of our representatives will reach back to you shortly.
                    If you need an instant response, please chat with us on WhatsApp.
                </p>

                <a
                    href="https://wa.me/2349078082348"
                    target="_blank"
                    class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-amber-500 text-black font-semibold hover:bg-amber-400 transition"
                >
                    Chat on WhatsApp
                </a>
            </div>

            <!-- CONTACT FORM -->
            <form v-else @submit.prevent="submitForm" class="space-y-6">
                <!-- Full Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Full Name
                    </label>
                    <input
                        v-model="form.full_name"
                        type="text"
                        placeholder="Your full name"
                        class="w-full rounded-lg bg-neutral-800 border border-neutral-700 px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-amber-500"
                        required
                    />
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Email Address
                    </label>
                    <input
                        v-model="form.email"
                        type="email"
                        placeholder="you@example.com"
                        class="w-full rounded-lg bg-neutral-800 border border-neutral-700 px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-amber-500"
                        required
                    />
                </div>

                <!-- Service Type -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        What do you need?
                    </label>
                    <select
                        v-model="form.service"
                        class="w-full rounded-lg bg-neutral-800 border border-neutral-700 px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-amber-500"
                        required
                    >
                        <option value="">Select a service</option>
                        <option>I need a website for my school / institution</option>
                        <option>I need an eCommerce website to sell products online</option>
                        <option>I need a business / corporate website</option>
                        <option>I need a landing page for marketing or ads</option>
                        <option>I need an online consultation / booking website</option>
                        <option>I need a POS system for my store</option>
                        <option>I need a custom web application</option>
                        <option>I need API integration on an existing website</option>
                        <option>I need payment gateway integration</option>
                        <option>I need a website redesign or performance optimization</option>
                        <option>I need hosting, server setup, or maintenance</option>
                        <option>Other (please describe)</option>
                    </select>
                </div>

                <!-- Message -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">
                        Project Details
                    </label>
                    <textarea
                        v-model="form.message"
                        rows="5"
                        placeholder="Tell us more about your project, timeline, or expectations..."
                        class="w-full rounded-lg bg-neutral-800 border border-neutral-700 px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-amber-500"
                        required
                    ></textarea>
                </div>

                <!-- Submit -->
                <div class="pt-4 text-center">
                    <button
                        type="submit"
                        :disabled="loading"
                        class="inline-flex items-center justify-center px-12 py-4 rounded-xl bg-amber-500 text-black font-semibold hover:bg-amber-400 transition disabled:opacity-60"
                    >
                        {{ loading ? 'Sending...' : 'Send Message' }}
                    </button>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
import axios from 'axios';

export default {
    name: 'ContactUs',

    data() {
        return {
            loading: false,
            submitted: false,
            form: {
                full_name: '',
                email: '',
                service: '',
                message: '',
            },
        };
    },

    methods: {
        async submitForm() {
            this.loading = true;

            try {
                await axios.post('/contact', this.form);

                this.submitted = true;
            } catch (error) {
                console.error(error);
                alert('Something went wrong. Please try again.');
            } finally {
                this.loading = false;
            }
        },
    },
};
</script>
