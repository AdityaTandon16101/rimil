<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@layouts/Customer.vue";
import Button from "@x/Button.vue";
import PageHead from "@x/Page/Head.vue";
import PageBody from "@x/Page/Body.vue";
import Form from "@utils/Form.vue";
import ValidationErrors from "@x/ValidationErrors.vue";
import Label from "@x/Label.vue";
import Input from "@x/Input.vue";
import { onMounted } from "@vue/runtime-core";

const props = defineProps(["user"]);

onMounted(() => {
  form.name = props.user.name;
  form.email = props.user.email;
  form.phone = props.user.phone;
});

const form = useForm({
  name: "",
  email: "",
  phone: "",
});

const save = () => {
  form.put(route("profile.update", props.user.id), {
    onFinish: () => form.reset(),
  });
};
</script>

<template>
  <Head title="My Profile" />

  <AuthenticatedLayout title="My Profile">
    <PageBody>
      <ValidationErrors class="mb-4" />
      <Form :submit="save">
        <div>
          <Label for="name" value="Name" />
          <Input
            id="name"
            type="text"
            class="mt-1 block w-full"
            name="name"
            v-model="form.name"
            required
            autofocus
          />
        </div>
        <div class="mt-4">
          <Label for="email" value="Email" />
          <Input
            id="email"
            type="tel"
            class="mt-1 block w-full"
            name="email"
            v-model="form.email"
            required
            autofocus
          />
        </div>
        <div class="mt-4">
          <Label for="phone" value="Phone" />
          <Input
            id="phone"
            type="tel"
            class="mt-1 block w-full"
            name="phone"
            v-model="form.phone"
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
      </Form>
    </PageBody>
  </AuthenticatedLayout>
</template>
