<script setup>
import Sidebar from "@x/Sidebar.vue";
import Header from "@x/Header.vue";

defineProps(["title"]);
</script>

<template>
    <div class="flex bg-[#eee]">
        <Sidebar />
        <div class="flex-1">
            <Header :title="title" />
            <slot />
        </div>
    </div>
</template>
