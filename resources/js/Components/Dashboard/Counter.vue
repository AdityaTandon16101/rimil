<script setup>
const props = defineProps({
  value: String,
  title: String,
  type: {
    type: String,
    default: "number",
  },
});
</script>

<template>
  <div class="shadow-md text-center">
    <div class="text-2xl my-4">
      {{
        props.type == "float"
          ? `&#8377;${parseFloat(props.value).toFixed(2)}`
          : props.value
      }}
    </div>
    <div class="uppercase mb-3">{{ props.title }}</div>
  </div>
</template>
