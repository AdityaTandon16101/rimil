<script setup>
const props = defineProps({
  value: String,
  title: String,
  type: {
    type: String,
    default: "number",
  },
  clr: {
    type: String,
    default: "text-[#333]",
  },
});
</script>

<template>
  <div class="shadow-md text-center">
    <div class="text-2xl my-4">
      <div v-if="$slots.value">
        <slot name="value" />
      </div>
      <div v-else :class="props.clr">
        {{
          props.type == "float"
            ? `&#8377;${parseFloat(props.value).toFixed(2)}`
            : props.value
        }}
      </div>
    </div>
    <div class="uppercase mb-3">{{ props.title }}</div>
  </div>
</template>
