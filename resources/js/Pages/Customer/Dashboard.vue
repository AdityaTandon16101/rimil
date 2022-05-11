<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@/Layouts/Authenticated.vue";
import PageBody from "@x/Page/Body.vue";
import Referral from "@x/Dashboard/Referral.vue";
import Counter from "@x/Dashboard/Counter.vue";

const props = defineProps({
  memberDetail: Object,
  teamMembersCount: String,
});
</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout title="Dashboard">
    <PageBody bgwhite>
      <Referral :isDepositedUpto500="props.memberDetail.total_deposits >= 500" />

      <div class="grid gap-6 mt-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
        <Counter value="Active" title="Status" />
        <Counter
          :value="props.memberDetail.total_deposits"
          type="float"
          title="DEPOSIT AMOUNT"
        />
        <Counter :value="$page.props.auth.user.id" title="ID" />
        <Counter
          :value="props.memberDetail.referral_income"
          type="float"
          title="REFERRAL INCOME"
        />

        <Counter :value="props.teamMembersCount" title="TOTAL MEMBER" />
        <Counter value="0" title="TOTAL ACTIVE IDs" />
        <Counter
          :value="props.memberDetail.total_earnings"
          type="float"
          title="TOTAL EARNING"
        />
        <Counter
          :value="props.memberDetail.withdraws"
          type="float"
          title="TOTAL WIDTHDRAW"
        />

        <Counter value="5000.00" type="float" title="PACKAGE" />
        <Counter value="0" title="WINNERS" />
        <Counter value="0" title="PHASE 1" />
        <Counter value="0" title="PHASE 2" />

        <Counter value="0" title="PHASE 3" />
        <Counter value="0" title="PHASE 4" />
        <Counter value="0" title="PHASE 5" />
        <Counter value="0" type="float" title="REWARD INCOME" />
      </div>
    </PageBody>
  </AuthenticatedLayout>
</template>
