<script setup>
import axios from "axios";
import GuestLayout from "@/Layouts/Guest.vue";
import Button from "@/Components/Button.vue";
import Input from "@/Components/Input.vue";
import Label from "@/Components/Label.vue";
import ValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { ref } from "@vue/reactivity";
import { onMounted } from "@vue/runtime-core";

const props = defineProps({
  referralCode: String,
});

onMounted(async () => {
  if (props.referralCode == "") {
    hasReferralCode.value = false;
    return;
  }
  form.referral_code = props.referralCode;
  await getSponsorName();
  hasReferralCode.value = true;
});

const hasReferralCode = ref(false);

const form = useForm({
  name: ``,
  email: ``,
  phone: ``,
  password: ``,
  password_confirmation: ``,
  referral_code: ``,
  //   terms: false,
});

const sponsor = ref({
  error: ``,
  searching: false,
  name: "",
});

const getSponsorName = async () => {
  if (form.referral_code == ``) {
    sponsor.value.error = `Please enter Referral Code`;
    sponsor.value.searching = false;
    sponsor.value.name = ``;
    return;
  }
  sponsor.value.searching = true;
  let sponsorResponse = await axios.get(`/api/sponsor-name/${form.referral_code}`);
  sponsorResponse = sponsorResponse.data;
  if (!sponsorResponse.success) {
    sponsor.value.error = `No Sponsor Found`;
    sponsor.value.searching = false;
    sponsor.value.name = ``;
    return;
  }
  sponsor.value.error = ``;
  sponsor.value.searching = false;
  sponsor.value.name = sponsorResponse.name;
};

const submit = () => {
  form.post(route("register"), {
    onFinish: () => form.reset("password", "password_confirmation"),
  });
};
</script>

<template>
  <Head title="Join Now" />

  <GuestLayout>
    <div class="w-1/3 mx-auto shadow-md registerform">
      <div class="text-3xl text-center uppercase">Register now</div>
      <ValidationErrors class="mb-4" />

      <form @submit.prevent="submit">
        <div>
          <Label for="name" value="Name" />
          <Input
            id="name"
            type="text"
            class="mt-1 block w-full"
            v-model="form.name"
            required
            autofocus
            autocomplete="name"
          />
        </div>

        <div class="mt-4">
          <Label for="email" value="Email" />
          <Input
            id="email"
            type="email"
            class="mt-1 block w-full"
            v-model="form.email"
            required
            autocomplete="username"
          />
        </div>

        <div class="mt-4">
          <Label for="phone" value="Phone" />
          <Input
            id="phone"
            type="tel"
            class="mt-1 block w-full"
            v-model="form.phone"
            required
            autocomplete="username"
          />
        </div>

        <div class="mt-4">
          <Label for="password" value="Password" />
          <Input
            id="password"
            type="password"
            class="mt-1 block w-full"
            v-model="form.password"
            required
            autocomplete="new-password"
          />
        </div>

        <div class="mt-4">
          <Label for="password_confirmation" value="Confirm Password" />
          <Input
            id="password_confirmation"
            type="password"
            class="mt-1 block w-full"
            v-model="form.password_confirmation"
            required
            autocomplete="new-password"
          />
        </div>

        <div class="flex gap-4 mt-4 w-full">
          <div class="w-1/2">
            <Label for="referral" value="Referral Code" />
            <Input
              id="referral"
              type="text"
              class="mt-1 block w-full"
              v-model="form.referral_code"
              placeholder="Have a Referral Code?"
              :disabled="hasReferralCode"
            />
          </div>
          <Button v-if="!hasReferralCode" @click="getSponsorName" class="mt-6 h-10"
            >Verify</Button
          >
          <div class="w-1/2">
            <Label
              for="sponsor"
              :value="sponsor.searching ? 'Searching' : 'Sponsor Name'"
            />
            <Input
              id="sponsor"
              type="text"
              class="mt-1 block w-full"
              v-model="sponsor.name"
              placeholder="Sponsor Name"
              disabled
            />
          </div>
        </div>

        <div class="flex items-center justify-between mt-4">
          <div v-html="sponsor.error"></div>
          <div>
            <Link
              :href="route('login')"
              class="underline text-sm text-gray-600 hover:text-gray-900"
            >
              Already registered?
            </Link>

            <Button
              class="ml-4"
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            >
              Register
            </Button>
          </div>
        </div>
      </form>
    </div>
  </GuestLayout>
</template>

<style lang="scss">
@import "@scss/_variables";
header {
  background-color: $primary;
}
.registerform {
  margin: calc($guestHeaderHeight * 1.5) auto;
  padding: 0.8em;
}
</style>
