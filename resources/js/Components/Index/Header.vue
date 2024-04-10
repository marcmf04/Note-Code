<script setup>
    import { defineProps } from 'vue';
import SelectOnSteroids from '@/Components/SelectOnSteroids.vue';


    const props = defineProps({
        username: String,
    });
</script>

<template>
    <header>
        <nav class="left-container">
            <section class="section-buttons">
                <svg viewBox="-1 -1 26 26" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M 22 5.724 L 20 4.366 L 14.797 0.855 C 13.098 -0.291 10.902 -0.291 9.203 0.855 L 2.203 5.579 C 0.824 6.51 0 8.059 0 9.724 L 0 19 C 0 21.757 2.243 24 5 24 L 7 24 C 7.553 24 8 23.552 8 23 L 8 14 C 8 13.449 8.448 13 9 13 L 15 13 C 15.552 13 16 13.449 16 14 L 16 23 C 16 23.552 16.447 24 17 24 L 19 24 C 21.757 24 24 21.757 24 19 L 24 9.724 C 24 8.143 23.256 6.666 22 5.724 Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 26 26">
                    <path
                        d="M2.849,23.55a2.954,2.954,0,0,0,3.266-.644L12,17.053l5.885,5.853a2.956,2.956,0,0,0,2.1.881,3.05,3.05,0,0,0,1.17-.237A2.953,2.953,0,0,0,23,20.779V5a5.006,5.006,0,0,0-5-5H6A5.006,5.006,0,0,0,1,5V20.779A2.953,2.953,0,0,0,2.849,23.55Z" />
                </svg>
            </section>
            <div class="search-container">
                <div class="input-container">
                    <input class="search-input" type="text" placeholder="Escribe aquí para buscar">
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <g>
                            <path
                                d="M504.352,459.061l-99.435-99.477c74.402-99.427,54.115-240.344-45.312-314.746S119.261-9.277,44.859,90.15S-9.256,330.494,90.171,404.896c79.868,59.766,189.565,59.766,269.434,0l99.477,99.477c12.501,12.501,32.769,12.501,45.269,0C516.853,491.83,516.853,471.562,504.352,459.061z M225.717,385.696c-88.366,0-160-71.634-160-160s71.634-160,160-160s160,71.634,160,160C385.623,314.022,314.044,385.602,225.717,385.696z" />
                        </g>
                    </svg>
                </div>
                <div class="select-container">
                    <select class="search-select">
                        <option selected>Usuarios</option>
                        <option>Notas</option>
                    </select>
                    <svg class="select-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M18.71,8.21a1,1,0,0,0-1.42,0l-4.58,4.58a1,1,0,0,1-1.42,0L6.71,8.21a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.59,4.59a3,3,0,0,0,4.24,0l4.59-4.59A1,1,0,0,0,18.71,8.21Z" />
                    </svg>
                </div>
            </div>
        </nav>
        <div class="right-container">
            {{ props.username }}
            <img class="profile-image" src="/assets/mikaelo.jpeg" alt="mikaelo">
        </div>
    </header>
</template>

<style scoped>
header {
    position: fixed;
    display: flex;
    align-items: center;
    height: 96px;
    width: 100%;
    padding: 0px 256px;
    background-color: #028090;
    gap: 20px;
    justify-content: space-between;
}

section {
    display: flex;
    gap: 20px;
}

.left-container {
    display: flex;
    align-items: center;
    gap: 20px;
}


.section-buttons svg {
    width: 36px;
    height: 36px;
    stroke: #B8F2E6;
    fill: transparent;
    cursor: pointer;
}
 
.input-container {
    position: relative;
}

.search-container {
    display: flex;
    gap: 10px;
}

.search-input {
    border: none;
    background: none;
    outline: none;
    color: #B8F2E6;
    width: 400px;
    padding-left: 40px;
    border-radius: 40px;
    background-color: #02636F;
    border: 2px solid #B8F2E6;
}

.search-input::placeholder {
    color: #B8F2E6;
}

.search-icon {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    fill: #B8F2E6;
    width: 20px;
    height: 20px;
    pointer-events: none
}

.search-select {
    display: flex;
    border: 2px solid #B8F2E6;
    border-radius: 40px;
    color: white;
    background-color: #02636F;
    font-size: 16px;
    outline: none;
    gap: 40px;
}

.search-select::placeholder {
    color: #B8F2E6;
}

.select-container {
    position: relative;
    display: inline-block;
}

.select-icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    fill: #B8F2E6;
    width: 24px;
    height: 24px;
    pointer-events: none;
}

.profile-image {
    width: 48px;
    height: 48px;
    border-radius: 50%;
}
</style>