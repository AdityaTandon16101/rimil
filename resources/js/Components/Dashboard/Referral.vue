<script setup>
import Input from "@x/Input.vue";
import Button from "@x/Button.vue";
import { Link } from "@inertiajs/inertia-vue3";
// import { onMounted } from "@vue/runtime-core";
import { ref } from "@vue/reactivity";

const props = defineProps({
  member: Object,
});

// onMounted(() => {
//   isDepositedUpto500.value = props.member.total_deposit >= 500;
// });

const isDepositedUpto500 = ref(true);

// const copied = ref(false);

// const copy = () => {
//   copied.value = false;
//   navigator.clipboard.writeText();
//   copied.value = true;
// };
</script>

<template>
  <div
    class="flex px-4 mb-2 h-auto lg:h-10 lg:leading-10"
    :class="{ 'bg-red-200': !isDepositedUpto500 }"
  >
    <div v-if="isDepositedUpto500" class="px-2 border border-gray-300">
      Your Referral Link
    </div>

    <Input
      v-if="isDepositedUpto500"
      type="text"
      class="flex-1"
      :value="
        route('register', {
          referral: props.member.referral_code,
        })
      "
      placeholder=" Referral ID"
      aria-describedby="basic-addon2"
      readonly
    />
    <div v-else>
      You havn't referral Code, To get your New Referral Code and link, Deposit upto
      &#8377;500
      <Link class="ml-4" :href="route('deposits.index')">Deposit Now</Link>
    </div>
    <!-- <div v-if="isDepositedUpto500">
      <Button @click="copy" class="h-10" type="button" :disabled="copied">
        {{ copied ? "Copied" : "Copy" }}
      </Button>
    </div> -->
  </div>
</template>
