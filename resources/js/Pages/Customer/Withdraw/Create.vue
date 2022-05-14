<script setup>
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@layouts/Customer.vue";
import PageHead from "@x/Page/Head.vue";
import Button from "@x/Button.vue";
import PageBody from "@x/Page/Body.vue";
import Form from "@utils/Form.vue";
import ValidationErrors from "@x/ValidationErrors.vue";
import Label from "@x/Label.vue";
import Input from "@x/Input.vue";

const props = defineProps(["withdrawableAmount"]);

const form = useForm({
  withdrawing_amount: 0,
});

const withdraw = () => {
  form.post(route("withdraws.store"), {
    onFinish: () => form.reset("amount"),
  });
};
</script>

<template>
  <Head title="New Withdraw" />

  <AuthenticatedLayout title="New Withdraw">
    <PageBody>
      <ValidationErrors class="mb-4" />
      <Form :submit="withdraw">
        <div>
          <Label for="withdrawable_amount" value="Withdrawable Amount" />
          <Input
            id="withdrawable_amount"
            type="tel"
            class="mt-1 block w-full"
            name="withdrawable_amount"
            v-model="props.withdrawableAmount"
            required
            autofocus
          />
        </div>
        <div class="mt-4">
          <Label for="withdrawing_amount" value="Enter Withdraw Amount" />
          <Input
            id="withdrawing_amount"
            type="tel"
            class="mt-1 block w-full"
            name="withdrawing_amount"
            v-model="form.withdrawing_amount"
            required
          />
        </div>
        <div class="flex mt-4 justify-end">
          <Button :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
            >Withdraw</Button
          >
        </div>
      </Form>
    </PageBody>
  </AuthenticatedLayout>
</template>
