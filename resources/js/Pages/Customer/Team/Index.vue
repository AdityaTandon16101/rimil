<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@/Layouts/Authenticated.vue";
import PageHead from "@x/Page/Head.vue";
import PageBody from "@x/Page/Body.vue";
import Table from "@utils/Table.vue";
import Paginate from "@utils/Paginate.vue";

const props = defineProps(["teamMembers"]);
</script>

<template>
  <Head title="My Team" />

  <AuthenticatedLayout title="My Team">
    <PageHead> Hello </PageHead>
    <PageBody header footer bgwhite>
      <Table>
        <template #thead>
          <tr class="text-left">
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
          </tr>
        </template>
        <tr v-for="teamMember in props.teamMembers.data" :key="teamMember.id">
          <td>{{ teamMember.name }}</td>
          <td>{{ teamMember.email }}</td>
          <td>{{ teamMember.phone }}</td>
        </tr>
      </Table>
    </PageBody>
    <Paginate :data="props.teamMembers" />
  </AuthenticatedLayout>
</template>
