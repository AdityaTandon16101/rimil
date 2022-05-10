<script setup>
const props = defineProps({
  isEmpty: {
    type: Boolean,
    default: false,
  },
  emptyMessage: {
    type: String,
    default: "",
  },
});
</script>

<template>
  <table v-if="!props.isEmpty" class="table w-full">
    <thead v-if="$slots.thead">
      <slot name="thead" />
    </thead>
    <slot />
    <tfoot v-if="$slots.tfoot">
      <slot name="tfoot" />
    </tfoot>
  </table>
  <div class="text-center text-2xl" v-else>{{ props.emptyMessage }}</div>
</template>
