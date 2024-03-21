<script setup>

</script>

<template>
    <div class="index-container">
        <header>
            <h1>Note Code</h1>
            <!-- Search bar -->
            <div class="searchbar-index">
                <div class="searchbar-searchInput">
                    <input type="text" placeholder="Buscar en notas...">
                </div>
            </div>
        </header>
        <main></main>
        <nav></nav>
    </div>
</template>

<style scoped>
    .index-container {
        display: grid;
        grid-template-rows: 220px auto 120px;
        height: 100vh;
        background: #028090;
    }

    header {
        background: #028090;
        padding: 30px;
        /* padding-top: 60px; */
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        gap: 15px;
    }

    main {
        background: #B8F2E6;
        border-radius: 20px;
    }

    nav {
        background: #028090;
    }

    h1 {
        color: #fff;
        font-size: 2em;
        font-weight: bold;
        height: fit-content;
    }

    .searchbar-index {
        height: 60px;
        width: 100%;
        background: #B8F2E6;
        border-radius: 30px;
    }

    .searchbar-index input {
        height: 100%;
        width: 100%;
        border: none;
        background: none;
        outline: none;
        font-size: 1.5em;
        padding-left: 50px;
    } 

    .searchbar-searchInput {
        height: 100%;
    }

    .searchbar-index input::placeholder {
        color: #028090;
    }


</style>