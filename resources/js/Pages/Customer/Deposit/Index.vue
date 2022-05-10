<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@/Layouts/Authenticated.vue";
import PageHead from "@x/Page/Head.vue";
import Button from "@x/Button.vue";
import PageBody from "@x/Page/Body.vue";
import Table from "@utils/Table.vue";
import Paginate from "@utils/Paginate.vue";

const props = defineProps(["deposits"]);
</script>

<template>
  <Head title="My Deposits" />

  <AuthenticatedLayout title="My Deposits">
    <PageHead>
      <Link :href="route('deposits.create')">
        <Button>Make Deposit</Button>
      </Link>
    </PageHead>
    <PageBody header :footer="props.deposits.data.length > 0" bgwhite>
      <Table :isEmpty="props.deposits.data.length == 0" emptyMessage="No Any Deposit yet">
        <template #thead>
          <tr class="text-left">
            <th>Date</th>
            <th width="100">Amount</th>
          </tr>
        </template>
        <tr v-for="deposit in props.deposits.data" :key="deposit.id">
          <td>{{ deposit.date }}</td>
          <td>{{ deposit.amount }}</td>
        </tr>
      </Table>
    </PageBody>
    <Paginate v-if="props.deposits.data.length > 0" :data="props.deposits" />
  </AuthenticatedLayout>
</template>
