<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@layouts/Customer.vue";
import PageHead from "@x/Page/Head.vue";
import Button from "@x/Button.vue";
import PageBody from "@x/Page/Body.vue";
import ValidationErrors from "@x/ValidationErrors.vue";
import Label from "@x/Label.vue";
import Input from "@x/Input.vue";

const form = useForm({
  amount: 0,
});

const save = () => {
  form.post(route("withdraws.store"), {
    onFinish: () => form.reset("amount"),
  });
};
</script>

<template>
  <Head title="New Withdraw" />

  <AuthenticatedLayout title="New Withdraw">
    <PageHead>
      <Button
        @click="save"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
        >Save</Button
      >
    </PageHead>
    <PageBody header bgwhite>
      <ValidationErrors class="mb-4" />
      <form>
        <div class="w-1/5">
          <Label for="amount" value="Amount" />
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
      </form>
    </PageBody>
  </AuthenticatedLayout>
</template>
