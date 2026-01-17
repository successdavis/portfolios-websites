<template>
    <section id="services" class="mx-auto max-w-7xl px-6 py-18 lg:py-28">
        <h2 class="mb-16 text-4xl font-bold">
            Our Web Design & Development Solutions
        </h2>
        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
            <ServiceCard
                title="WordPress Websites"
                :items="[
                    'Custom themes',
                    'SEO-ready',
                    'Fast & secure',
                    'Easy management',
                ]"
            />
            <ServiceCard
                title="School Portals"
                :items="[
                    'Student dashboards',
                    'Results & payments',
                    'Admin roles',
                    'Secure access',
                ]"
            />
            <ServiceCard
                title="E‑Commerce Platforms"
                :items="[
                    'Inventory management',
                    'Payment gateways',
                    'Order tracking',
                    'Analytics',
                ]"
            />
            <ServiceCard
                title="Online Retail Stores"
                :items="[
                    'High conversion UI',
                    'Mobile checkout',
                    'Discount systems',
                    'Optimized speed',
                ]"
            />
            <ServiceCard
                title="Corporate Websites"
                :items="[
                    'Brand authority',
                    'CMS driven',
                    'Investor ready',
                    'Enterprise security',
                ]"
            />
            <ServiceCard
                title="Custom Web Apps & APIs"
                :items="[
                    'REST APIs',
                    'Payment & SMS',
                    'Dashboards',
                    'Scalable systems',
                ]"
            />
        </div>
    </section>
</template>
<script>
import ServiceCard from '@/components/ServiceCard.vue';

export default {
    name: 'Services',
    components: { ServiceCard },
};
</script>
