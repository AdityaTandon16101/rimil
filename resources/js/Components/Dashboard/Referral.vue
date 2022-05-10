<script setup>
import Input from "@x/Input.vue";
import Button from "@x/Button.vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
  isDepositedUpto500: Boolean,
});
</script>

<template>
  <div
    class="flex px-4 mb-2 h-auto lg:h-10 lg:leading-10"
    :class="{ 'bg-red-200': !props.isDepositedUpto500 }"
  >
    <div v-if="props.isDepositedUpto500" class="px-2 border border-gray-300">
      Your Referral Link
    </div>

    <Input
      v-if="props.isDepositedUpto500"
      type="text"
      class="flex-1"
      :value="
        route('register', {
          referral: $page.props.auth.user.referral_id,
        })
      "
      placeholder=" Referral ID"
      aria-describedby="basic-addon2"
      readonly
    />
    <div v-else>
      You havn't referral ID, To get your New Referral ID and link, Deposit upto
      &#8377;500
      <Link class="ml-4" :href="route('deposits.index')">Deposit Now</Link>
    </div>
    <div v-if="props.isDepositedUpto500">
      <Button class="h-10" type="button">Copy</Button>
    </div>
  </div>
</template>
