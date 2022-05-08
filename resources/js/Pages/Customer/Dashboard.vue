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
        </PageBody>
    </AuthenticatedLayout>
</template>
