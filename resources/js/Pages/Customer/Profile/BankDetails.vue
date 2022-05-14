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
import { onMounted, ref } from "@vue/runtime-core";

const props = defineProps(["user", "bankDetails"]);

onMounted(() => {
  if (props.bankDetails == null) {
    isAdding.value = true;
    return;
  }
  isAdding.value = false;
  form.bank_name = props.bankDetails.bank_name;
  form.branch_name = props.bankDetails.branch_name;
  form.account_name = props.bankDetails.account_name;
  form.account_number = props.bankDetails.account_number;
  form.account_name = props.bankDetails.account_name;
  form.ifsc = props.bankDetails.ifsc;
});

const isAdding = ref(false);

const form = useForm({
  bank_name: "",
  branch_name: "",
  account_name: "",
  account_number: "",
  ifsc: "",
  password: "",
});

const addBankDetails = () => {
  form.put(
    route(isAdding.value ? "profile.bank.store" : "profile.bank.update", props.user.id),
    {
      onFinish: () => {
        form.bank_name = "";
        form.branch_name = "";
        form.account_number = "";
        form.ifsc = "";
        form.password = "";
      },
    }
  );
};
</script>

<template>
  <Head title="Bank Details" />

  <AuthenticatedLayout title="Bank Details">
    <PageBody>
      <Form :submit="addBankDetails">
        <ValidationErrors class="mb-4" />
        <div>
          <Label for="bank_name" value="Bank Name" />
          <Input
            id="bank_name"
            type="text"
            class="mt-1 block w-full"
            name="bank_name"
            v-model="form.bank_name"
            required
            autofocus
          />
        </div>
        <div class="mt-4">
          <Label for="branch_name" value="Branch Name" />
          <Input
            id="branch_name"
            type="text"
            class="mt-1 block w-full"
            name="branch_name"
            v-model="form.branch_name"
            required
          />
        </div>
        <div class="mt-4">
          <Label for="account_name" value="Bank Account Name" />
          <Input
            id="account_name"
            type="text"
            class="mt-1 block w-full"
            name="account_name"
            v-model="form.account_name"
            required
          />
        </div>
        <div class="mt-4">
          <Label for="account_number" value="Bank Account Number" />
          <Input
            id="account_number"
            type="tel"
            class="mt-1 block w-full"
            name="account_number"
            v-model="form.account_number"
            required
          />
        </div>
        <div class="mt-4">
          <Label for="ifsc" value="IFSC Code" />
          <Input
            id="ifsc"
            type="text"
            class="mt-1 block w-full"
            name="ifsc"
            v-model="form.ifsc"
            required
          />
        </div>
        <div class="mt-4">
          <Label for="password" value="Account Password" />
          <Input
            id="password"
            type="password"
            class="mt-1 block w-full"
            name="password"
            v-model="form.password"
            required
          />
        </div>
        <div class="flex items-center justify-end mt-4">
          <Button
            type="submit"
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
          >
            {{ isAdding ? "Add" : "Update" }}
          </Button>
        </div>
      </Form>
    </PageBody>
  </AuthenticatedLayout>
</template>
