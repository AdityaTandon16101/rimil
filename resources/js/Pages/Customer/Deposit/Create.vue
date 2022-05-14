<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@layouts/Customer.vue";
import Button from "@x/Button.vue";
import PageBody from "@x/Page/Body.vue";
import Form from "@utils/Form.vue";
import ValidationErrors from "@x/ValidationErrors.vue";
import Label from "@x/Label.vue";
import Input from "@x/Input.vue";

const form = useForm({
  amount: 0,
});

const depositAmountChoosen = (amount) => (form.amount = amount);

const save = () => {
  form.post(route("deposits.store"), {
    onFinish: () => (form.amount = ""),
  });
};
</script>

<template>
  <Head title="New Deposit" />

  <AuthenticatedLayout title="New Deposit">
    <PageBody>
      <ValidationErrors class="mb-4" />
      <Form :submit="save">
        <ul class="flex gap-4 mb-4">
          <li
            v-for="option in [300, 500, 800, 1000, 1500]"
            :key="option"
            class="cursor-pointer shadow-md rounded-md px-3"
            @click="depositAmountChoosen(option)"
          >
            {{ option }}
          </li>
        </ul>
        <div>
          <Label for="amount" value="Enter Deposit Amount" />
          <Input
            id="amount"
            type="tel"
            class="mt-1 block w-full"
            name="amount"
            v-model="form.amount"
            required
            autofocus
          />
        </div>
        <div class="flex justify-end mt-4">
          <Button
            type="submit"
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
            >Deposit</Button
          >
        </div>
      </Form>
    </PageBody>
  </AuthenticatedLayout>
</template>
