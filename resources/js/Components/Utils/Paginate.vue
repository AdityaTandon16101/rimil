<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import Button from "@x/Button.vue";
defineProps({
  data: {
    type: Object,
  },
});
</script>

<template>
  <div class="flex justify-end bg-white mt-2 ml-2 h-12 leading-[3rem] px-6">
    <ul class="flex gap-x-2 leading-[3rem]">
      <li class="mr-4">{{ data.to }} / {{ data.total }}</li>
      <li v-show="data.total > 20">
        <Link :href="data.prev_page_url">
          <Button>&lt;</Button>
        </Link>
      </li>
      <li v-show="data.total > 20">
        <Link :href="data.next_page_url">
          <Button>&gt;</Button>
        </Link>
      </li>
    </ul>
  </div>
</template>
