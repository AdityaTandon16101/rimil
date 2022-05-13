<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@layouts/Admin.vue";
import PageBody from "@x/Page/Body.vue";
import Table from "@utils/Table.vue";
import Status from "@utils/Status.vue";

const props = defineProps(["users"]);
</script>

<template>
  <Head title="Admin" />

  <AuthenticatedLayout title="Admin Page">
    <PageBody>
      <Table
        :isEmpty="props.users.data.length == 0"
        emptyMessage="You havn't Customer yet"
      >
        <template #thead>
          <tr class="text-left">
            <th>ID</th>
            <th>Name</th>
            <th>Joining Date</th>
            <th>Phone</th>
            <th>Total Deposits</th>
            <th>Status</th>
          </tr>
        </template>
        <tr v-for="user in props.users.data" :key="user.id">
          <td>{{ user.alloted_id ?? "-" }}</td>
          <td>{{ user.name }}</td>
          <td>{{ user.created_at }}</td>
          <td>{{ user.phone }}</td>
          <td>&#8377;{{ parseFloat(user.member_detail.total_deposit).toFixed(2) }}</td>
          <td>
            <Status :status="user.status" />
          </td>
        </tr>
      </Table>
    </PageBody>
  </AuthenticatedLayout>
</template>
