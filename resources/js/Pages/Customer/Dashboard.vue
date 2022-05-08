<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@/Layouts/Authenticated.vue";
import PageBody from "@x/Page/Body.vue";
import Referral from "@x/Dashboard/Referral.vue";

const props = defineProps({
    isDepositedUpto500: Boolean,
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout title="Dashboard">
        <PageBody bgwhite>
            <Referral :isDepositedUpto500="isDepositedUpto500" />

            <div class="row">
                <div class="colum-1">
                    <div class="data">
                        <h2>ACTIVE</h2>
                        <h5>STATUS</h5>
                    </div>
                </div>

                <div class="colum-2">
                    <div class="data">
                        <h2>Rs 500.00</h2>
                        <h5>DEPOSIT AMOUNT</h5>
                    </div>
                </div>

                <div class="colum-3">
                    <div class="data">
                        <h2>01</h2>
                        <h5>YOUR ID NO.</h5>
                    </div>
                </div>

                <div class="colum-4">
                    <div class="data">
                        <h2>Rs 0000.00</h2>
                        <h5>REFERRAL INCOME</h5>
                    </div>
                </div>
              </div>

              <div class="row">
                  <div class="colum-1">
                      <div class="data">
                          <h2>00</h2>
                          <h5>TOTAL MEMBER</h5>
                      </div>
                  </div>

                  <div class="colum-2">
                      <div class="data">
                          <h2>00</h2>
                          <h5>TOTAL ACTIVE IDs</h5>
                      </div>
                  </div>

                  <div class="colum-3">
                      <div class="data">
                          <h2>Rs 0000.00</h2>
                          <h5>TOTAL EARNING</h5>
                      </div>
                  </div>

                  <div class="colum-4">
                      <div class="data">
                          <h2>Rs 0000.00</h2>
                          <h5>TOTAL WIDTHDRAW</h5>
                      </div>
                  </div>
              </div>

              <div class="row">
                  
                  <div class="colum-1">
                      <div class="data">
                          <h2>Rs 5000.00</h2>
                          <h5>PACKAGE</h5>
                      </div>
                  </div>

                  <div class="colum-2">
                      <div class="data">
                          <h2>00</h2>
                          <h5>WINNERS</h5>
                      </div>
                  </div>

                  <div class="colum-3">
                      <div class="data">
                          <h2>00</h2>
                          <h5>PHASE 1</h5>
                      </div>
                  </div>

                  <div class="colum-4">
                      <div class="data">
                          <h2>00</h2>
                          <h5>PHASE 2</h5>
                      </div>
                  </div>

              </div>

              <div class="row">
                  
                  <div class="colum-1">
                      <div class="data">
                          <h2>00</h2>
                          <h5>PHASE 3</h5>
                      </div>
                  </div>

                  <div class="colum-2">
                      <div class="data">
                          <h2>00</h2>
                          <h5>PHASE 4</h5>
                      </div>
                  </div>

                  <div class="colum-3">
                      <div class="data">
                          <h2>00</h2>
                          <h5>PHASE 5</h5>
                      </div>
                  </div>

                  <div class="colum-4">
                      <div class="data">
                          <h2>Rs 0000.00</h2>
                          <h5>REWARD INCOME</h5>
                      </div>
                  </div>
              </div>
        </PageBody>
    </AuthenticatedLayout>
</template>
