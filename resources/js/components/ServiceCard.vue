<template>
    <div class="bg-gradient-to-br from-[#111827] to-[#020617] rounded-2xl p-8 border border-gray-800 hover:border-amber-500 transition">
        <h3 class="text-xl font-semibold mb-5">{{ title }}</h3>
        <ul class="space-y-3 text-gray-400">
            <li v-for="item in items" :key="item">• {{ item }}</li>
        </ul>
    </div>
</template>
<script setup>
defineProps({ title: String, items: Array })
</script>
