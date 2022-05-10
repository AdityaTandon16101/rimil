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
      'only-body': !header && !footer,
      'only-header': header && !footer,
      'only-footer': !header && footer,
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
  height: calc(100vh - $appHeaderHeight - 1rem);
}
.has-header,
.has-footer {
  height: calc(100vh - $appHeaderHeight - 3rem - 3rem - 2rem);
}
.only-header {
  height: calc(100vh - $appHeaderHeight - 3rem - 2rem);
}
.only-footer {
  height: calc(100vh - $appHeaderHeight - 3rem - 2rem);
}
</style>
