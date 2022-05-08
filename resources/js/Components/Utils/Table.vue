<template>
  <table class="table w-full">
    <thead v-if="$slots.thead">
      <slot name="thead" />
    </thead>
    <slot />
    <tfoot v-if="$slots.tfoot">
      <slot name="tfoot" />
    </tfoot>
  </table>
</template>
