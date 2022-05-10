<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@/Layouts/Authenticated.vue";
import Button from "@x/Button.vue";
import PageBody from "@x/Page/Body.vue";
import Table from "@utils/Table.vue";
import Paginate from "@utils/Paginate.vue";

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
            <th>Sr.No.</th>
            <th>Id</th>
            <th>Name</th>
            <th>JoingDate</th>
            <th>Number</th>
            <th>Total Invest</th>
            <th>Status</th>
          </tr>
        </template>
        <tr v-for="teamMember in props.teamMembers.data" :key="teamMember.id">
          <td>{{ teamMember.Sr.No. }}</td>
          <td>{{ teamMember.email }}</td>
          <td>{{ teamMember.phone }}</td>
        </tr>
      </Table>
    </PageBody>
    <Paginate v-if="props.teamMembers.data.length > 0" :data="props.teamMembers" />
  </AuthenticatedLayout>
</template>
