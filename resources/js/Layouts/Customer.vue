<script setup>
import Sidebar from "@x/Sidebar/Customer.vue";
import Header from "@x/Header/Customer.vue";

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
