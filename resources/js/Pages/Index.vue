<script setup>
    import IndexContent from "@/Components/Index/IndexContent.vue";
    import Header from '@/Components/Index/Header.vue';
    import { defineProps } from "vue";

    const props = defineProps({
        auth: Object,
    });
</script>

<template>
    <div class="index-container">
        <Header :username="props.auth.user.username"/>
        <IndexContent />
    </div>
</template>

<style scoped>

</style>