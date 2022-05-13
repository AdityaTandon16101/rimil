<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@layouts/Customer.vue";
import Button from "@x/Button.vue";
import PageHead from "@x/Page/Head.vue";
import PageBody from "@x/Page/Body.vue";
import ValidationErrors from "@x/ValidationErrors.vue";
import Label from "@x/Label.vue";
import Input from "@x/Input.vue";

const props = defineProps(["user"]);

const form = useForm({
  current_password: "",
  password: "",
  password_confirmation: "",
});

const changePassword = () => {
  form.put(route("profile.password.update", props.user.id), {
    onFinish: () => {
      form.current_password = "";
      form.password = "";
      form.password_confirmation = "";
    },
  });
};
</script>

<template>
  <Head title="Change Password" />

  <AuthenticatedLayout title="Change Password">
    <PageBody>
      <form
        @submit.prevent="changePassword"
        class="w-1/3 mx-auto mt-5 p-4 bg-white shadow-md"
      >
        <ValidationErrors class="mb-4" />
        <div class="">
          <Label for="current_password" value="Current Password" />
          <Input
            id="current_password"
            type="password"
            class="mt-1 block w-full"
            name="current_password"
            v-model="form.current_password"
            required
            autofocus
          />
        </div>
        <div class="mt-4">
          <Label for="password" value="New Password" />
          <Input
            id="password"
            type="password"
            class="mt-1 block w-full"
            name="password"
            v-model="form.password"
            required
            autofocus
          />
        </div>
        <div class="mt-4">
          <Label for="password_confirmation" value="Confirm New Password" />
          <Input
            id="password_confirmation"
            type="password"
            class="mt-1 block w-full"
            name="password_confirmation"
            v-model="form.password_confirmation"
            required
            autofocus
          />
        </div>
        <div class="flex items-center justify-end mt-4">
          <Button
            type="submit"
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
            >Update</Button
          >
        </div>
      </form>
    </PageBody>
  </AuthenticatedLayout>
</template>
ationErr
