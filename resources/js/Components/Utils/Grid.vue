<script setup>
const props = defineProps({
  sm: {
    type: String,
    default: "grid-cols-1",
  },
  md: {
    type: String,
    default: "md:grid-cols-2",
  },
  lg: {
    type: String,
    default: "lg:grid-cols-4",
  },
});
</script>

<template>
  <div :class="`grid gap-6 mt-4 ${props.sm} ${props.md} ${props.lg}`">
    <div v-if="$slots.head" class="col-span-full">
      <slot name="head" />
    </div>
    <slot />
  </div>
</template>
