<script setup>
const props = defineProps({
  submit: Function,
});
</script>

<template>
  <form @submit.prevent="submit" class="w-1/3 mx-auto mt-5 p-4 bg-white shadow-md">
    <slot />
  </form>
</template>
