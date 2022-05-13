<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@layouts/Customer.vue";
import Button from "@x/Button.vue";
import PageBody from "@x/Page/Body.vue";
import Table from "@utils/Table.vue";
import Paginate from "@utils/Paginate.vue";
import Status from "@utils/Status.vue";

const props = defineProps(["teamMembers"]);
</script>

<template>
  <Head title="My Team" />

  <AuthenticatedLayout title="My Team">
    <PageBody :footer="props.teamMembers.data.length > 0" bgwhite>
      <Table
        :isEmpty="props.teamMembers.data.length == 0"
        emptyMessage="You havn't Team Member yet"
      >
        <template #thead>
          <tr class="text-left">
            <th>S.No</th>
            <th>ID</th>
            <th>Name</th>
            <th>Joining Date</th>
            <th>Phone</th>
            <th>Total Deposits</th>
            <th>Status</th>
          </tr>
        </template>
        <tr v-for="(teamMember, index) in props.teamMembers.data" :key="teamMember.id">
          <td>{{ index + 1 }}</td>
          <td>{{ teamMember.id }}</td>
          <td>{{ teamMember.name }}</td>
          <td>{{ teamMember.created_at }}</td>
          <td>{{ teamMember.phone }}</td>
          <td>
            &#8377;{{ parseFloat(teamMember.member_detail.total_deposit).toFixed(2) }}
          </td>
          <td>
            <Status :status="teamMember.status" />
          </td>
        </tr>
      </Table>
    </PageBody>
    <Paginate v-if="props.teamMembers.data.length > 0" :data="props.teamMembers" />
  </AuthenticatedLayout>
</template>
