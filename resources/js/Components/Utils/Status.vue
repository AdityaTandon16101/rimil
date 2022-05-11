<script setup>
import { computed } from "vue";

const props = defineProps({
  status: Boolean,
});

const classes = computed(() =>
  props.status
    ? "bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900"
    : "bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900"
);
</script>

<template>
  <span :class="classes">
    {{ props.status ? "Active" : "Inactive" }}
  </span>
</template>

<style></style>
