<template>
    <div>
        <p class="text-3xl font-bold text-amber-500">{{ value }}</p>
        <p class="mt-2 text-gray-400">{{ label }}</p>
    </div>
</template>
<script setup>
defineProps({ label: String, value: String })
</script>
