<script setup>
import { ref, defineProps } from 'vue';
import Note from '@/Components/Index/Note.vue';
import axios from 'axios';


</script>

<template>
    <div class="index-content-container">
    </div>
</template>

<style scoped>
    .index-content-container {
        background: #B8F2E6;
        height: 100vh;
        padding: 0 256px;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
    }
</style>