<script setup>
import Header from "@x/Header/Customer.vue";

defineProps(["title"]);
</script>

<template>
  <div class="bg-[#eee]">
    <Header :title="title" />
    <slot />
  </div>
</template>
