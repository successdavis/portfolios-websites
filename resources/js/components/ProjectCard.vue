<template>
    <a :href="link" target="_blank" class="relative group overflow-hidden" :class="bg">
        <img :src="image" class="w-full h-80 object-cover opacity-70 group-hover:scale-110 transition duration-500" />
        <div class="absolute inset-0 p-6 flex items-end">
            <h3 class="text-lg font-semibold">{{ title }}</h3>
        </div>
    </a>
</template>
<script setup>
defineProps({ title: String, image: String, link: String, bg: String })
</script>
