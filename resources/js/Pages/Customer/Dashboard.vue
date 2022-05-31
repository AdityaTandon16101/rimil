<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@layouts/Customer.vue";
import PageBody from "@x/Page/Body.vue";
import Referral from "@x/Dashboard/Referral.vue";
import Grid from "@utils/Grid.vue";
import Status from "@utils/Status.vue";
import Counter from "@x/Dashboard/Counter.vue";

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
      <Referral :member="props.memberDetail" />

      <Grid lg="lg:grid-cols-5">
        <template #head>
          <div class="mt-4 flex justify-between">
            <div>Account</div>
            <div>
              Status:
              <Status :status="$page.props.auth.user.status" />
            </div>
          </div>
        </template>
        <Counter
          :value="props.memberDetail.total_deposit"
          type="float"
          title="DEPOSIT AMOUNT"
        />
        <Counter
          :value="props.memberDetail.total_deposit ? props.memberDetail.alloted_id : '-'"
          title="ID"
        />
        <Counter :value="props.counters.team" title="TOTAL MEMBER" />
        <Counter
          :value="props.counters.team != 0 ? props.counters.active_team : '-'"
          title="TOTAL ACTIVE IDs"
        />
        <Counter
          :value="props.memberDetail.total_withdraw"
          type="float"
          title="TOTAL WIDTHDRAW"
        />
      </Grid>
      <Grid>
        <template #head>
          <div class="mt-4">Income</div>
        </template>
        <Counter
          :value="props.memberDetail.referral_income"
          type="float"
          title="REFERRAL INCOME"
        />
        <Counter
          :value="props.memberDetail.reward_income"
          type="float"
          title="REWARD INCOME"
        />
        <Counter
          :value="props.memberDetail.total_earning"
          type="float"
          title="TOTAL EARNING"
        />
      </Grid>
      <Grid lg="lg:grid-cols-6">
        <template #head>
          <div class="mt-4">Package &#8377;{{ getPhasePackageRate() }}</div>
        </template>
        <Counter :value="props.counters.winners" title="WINNERS" />
        <Counter :value="props.counters.phase_one" title="PHASE 01" />
        <Counter :value="props.counters.phase_two" title="PHASE 02" />
        <Counter :value="props.counters.phase_three" title="PHASE 03" />
        <Counter :value="props.counters.phase_four" title="PHASE 04" />
        <Counter :value="props.counters.phase_five" title="PHASE 05" />
      </Grid>
    </PageBody>
  </AuthenticatedLayout>
</template>

<style lang="scss" scoped>
@import "@scss/_variables";
.grid.gap-6 {
  & > div:not(.col-span-full):nth-child(odd) {
    background-color: $secondary;
  }
  & > div:not(.col-span-full):nth-child(even) {
    background-color: $primary;
    color: #fff;
  }
}
</style>
