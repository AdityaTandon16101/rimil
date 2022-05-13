<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@layouts/Customer.vue";
import PageBody from "@x/Page/Body.vue";
import Referral from "@x/Dashboard/Referral.vue";
import Counter from "@x/Dashboard/Counter.vue";
import Status from "@utils/Status.vue";

const props = defineProps({
  memberDetail: Object,
  counters: Object,
});

const getPhasePackageRate = () => {
  return 5000;
};
</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout title="Dashboard">
    <PageBody bgwhite>
      <Referral :isDepositedUpto500="props.memberDetail.total_deposit >= 500" />

      <div class="grid gap-6 mt-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
        <Counter
          :value="$page.props.auth.user.status ? 'Active' : 'Inactive'"
          :clr="$page.props.auth.user.status ? 'text-[#008000]' : 'text-[#ff0000]'"
          title="Status"
        />
        <Counter
          :value="props.memberDetail.total_deposit"
          type="float"
          title="DEPOSIT AMOUNT"
        />
        <Counter
          :value="props.memberDetail.total_deposit ? props.memberDetail.alloted_id : '-'"
          title="ID"
        />
        <Counter
          :value="props.memberDetail.referral_income"
          type="float"
          title="REFERRAL INCOME"
        />

        <Counter :value="props.counters.team" title="TOTAL MEMBER" />
        <Counter
          :value="props.teamMembersCount == 0 ? '0' : '-'"
          title="TOTAL ACTIVE IDs"
        />
        <Counter
          :value="props.memberDetail.total_earning"
          type="float"
          title="TOTAL EARNING"
        />
        <Counter
          :value="props.memberDetail.total_withdraw"
          type="float"
          title="TOTAL WIDTHDRAW"
        />

        <Counter :value="getPhasePackageRate()" type="float" title="PACKAGE" />
        <Counter :value="props.counters.winners" title="WINNERS" />
        <Counter :value="props.counters.phase_one" title="PHASE 1" />
        <Counter :value="props.counters.phase_two" title="PHASE 2" />

        <Counter :value="props.counters.phase_three" title="PHASE 3" />
        <Counter :value="props.counters.phase_four" title="PHASE 4" />
        <Counter :value="props.counters.phase_five" title="PHASE 5" />
        <Counter
          :value="props.memberDetail.reward_income"
          type="float"
          title="REWARD INCOME"
        />
      </div>
    </PageBody>
  </AuthenticatedLayout>
</template>
