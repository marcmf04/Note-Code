<script setup>
    import IndexContent from "@/Components/Index/IndexContent.vue";
    import { defineProps } from "vue";

    const props = defineProps({
        auth: Object,
    });



</script>

<template>
    {{ props.auth.name }}
    <div class="index-container">
        <IndexContent />
    </div>
</template>

<style scoped>

</style>