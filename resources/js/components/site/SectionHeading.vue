<script setup lang="ts">
withDefaults(
    defineProps<{
        eyebrow: string;
        title: string;
        accent?: string;
        copy?: string;
        align?: 'center' | 'left';
    }>(),
    { align: 'center' },
);
</script>

<template>
    <div
        data-reveal
        :class="
            align === 'center' ? 'mx-auto max-w-3xl text-center' : 'max-w-2xl'
        "
    >
        <p
            class="inline-flex items-center gap-3 text-xs font-medium tracking-[0.25em] text-[#e7b955] uppercase"
        >
            <span class="h-px w-8 bg-[#e7b955]/60"></span>
            {{ eyebrow }}
        </p>
        <h2
            class="mt-6 text-4xl leading-[1.05] font-semibold tracking-[-0.03em] text-white sm:text-5xl lg:text-6xl"
        >
            {{ title }}
            <span
                v-if="accent"
                class="text-gold font-display font-normal italic"
                >{{ accent }}</span
            >
        </h2>
        <p v-if="copy" class="mt-6 text-lg leading-relaxed text-white/55">
            {{ copy }}
        </p>
    </div>
</template>
