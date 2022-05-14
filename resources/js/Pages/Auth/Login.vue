<script setup>
import GuestLayout from "@layouts/Guest.vue";
import Button from "@x/Button.vue";
import Checkbox from "@x/Checkbox.vue";
import Input from "@x/Input.vue";
import Label from "@x/Label.vue";
import ValidationErrors from "@x/ValidationErrors.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

defineProps({
  canResetPassword: Boolean,
  status: String,
});

const form = useForm({
  login: "",
  password: "",
  remember: false,
});

const submit = () => {
  form.post(route("login"), {
    onFinish: () => form.reset("password"),
  });
};
</script>

<template>
  <Head title="Log in" />

  <GuestLayout>
    <div class="w-1/4 mx-auto shadow-md loginform">
      <ValidationErrors class="mb-4" />

      <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
      </div>

      <div class="text-3xl text-center uppercase">Login</div>

      <form @submit.prevent="submit">
        <div>
          <Label for="email" value="Email Or Phone" />
          <Input
            id="email"
            type="text"
            class="mt-1 block w-full"
            v-model="form.login"
            required
            autofocus
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
            autocomplete="current-password"
          />
        </div>

        <div class="block mt-4">
          <label class="flex items-center">
            <Checkbox name="remember" v-model:checked="form.remember" />
            <span class="ml-2 text-sm text-gray-600">Remember me</span>
          </label>
        </div>

        <div class="flex items-center justify-end mt-4">
          <Link
            v-if="canResetPassword"
            :href="route('password.request')"
            class="underline text-sm text-gray-600 hover:text-gray-900"
          >
            Forgot your password?
          </Link>

          <Button
            class="ml-4"
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
          >
            Log in
          </Button>
        </div>
      </form>
    </div>
  </GuestLayout>
</template>

<style lang="scss">
@import "@scss/_variables";
body {
  background-color: #eee;
}
header {
  background-color: $primary;
}
.loginform {
  margin: calc($guestHeaderHeight * 2) auto;
  padding: 0.8em;
  background-color: #fff;
}
</style>
