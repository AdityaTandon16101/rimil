<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@/Layouts/Authenticated.vue";
import Button from "@x/Button.vue";
import PageBody from "@x/Page/Body.vue";
import Table from "@utils/Table.vue";
import Status from "@utils/Status.vue";
import Paginate from "@utils/Paginate.vue";

const props = defineProps(["members"]);
</script>

<template>
  <Head title="Permanent Members" />

  <AuthenticatedLayout title="Permanent Members">
    <PageBody :footer="props.members.data.length > 0" bgwhite>
      <Table
        :isEmpty="props.members.data.length == 0"
        emptyMessage="No Any Permanent Member"
      >
        <template #thead>
          <tr class="text-left">
            <th>S.No</th>
            <th>ID</th>
            <th>Name</th>
            <th>Jioning Date</th>
            <th>Phone</th>
            <th>Total Deposits</th>
            <th>Status</th>
          </tr>
        </template>
        <tr v-for="(member, index) in props.members.data" :key="member.id">
          <td>{{ index + 1 }}</td>
          <td>{{ member.id }}</td>
          <td>{{ member.name }}</td>
          <td>{{ member.created_at }}</td>
          <td>{{ member.phone }}</td>
          <td>&#8377;{{ parseFloat(member.member_detail.total_deposits).toFixed(2) }}</td>
          <td>
            <Status :status="member.status" />
          </td>
        </tr>
      </Table>
    </PageBody>
    <Paginate v-if="props.members.data.length > 0" :data="props.members" />
  </AuthenticatedLayout>
</template>
