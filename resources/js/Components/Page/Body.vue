<script setup>
defineProps({
  bgwhite: {
    type: Boolean,
    default: false,
  },
  header: {
    type: Boolean,
    default: false,
  },
  footer: {
    type: Boolean,
    default: false,
  },
});
</script>

<template>
  <div
    class="p-4 ml-2 mt-2 overflow-x-hidden overflow-y-auto"
    :class="{
      'bg-white': bgwhite,
      'only-body mt-6': !header && !footer,
      'has-header': header,
      'has-footer': footer,
    }"
  >
    <slot />
  </div>
</template>

<style lang="scss" scoped>
@import "@scss/_variables";
.only-body {
  height: calc(100vh - $appHeaderHeight - 2rem);
}
.has-header {
  height: calc(100vh - $appHeaderHeight - 3rem - 2rem);
}
.has-footer {
  height: calc(100vh - $appHeaderHeight - 3rem - 3rem - 2rem);
}
</style>
