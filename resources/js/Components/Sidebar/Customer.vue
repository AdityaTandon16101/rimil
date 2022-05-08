<script setup>
import { Link } from "@inertiajs/inertia-vue3";
const menus = [
    {
        name: `Dashboard`,
        routeName: `dashboard`,
    },
    {
        name: `My Team`,
        routeName: `teams.index`,
    },
    {
        name: `Deposit`,
        routeName: `deposites.index`,
    },
    {
        name: `Withdraw`,
        routeName: `withdraws.index`,
    },
    // {
    //     name: `My Profile`,
    //     routeName: `profile`,
    // },
];
</script>

<template>
    <div class="bg-white w-[20vw] pt-16">
        <ul class="overflow-x-hidden overflow-y-auto">
            <li
                v-for="menu in menus"
                :key="menu.name"
                class="px-4 h-12"
                :class="{
                    'border-l-4 border-[#603CB7]': route().current(
                        menu.routeName
                    ),
                }"
            >
                <Link :href="route(menu.routeName)" class="flex gap-x-2">
                    <span
                        class="text-lg leading-[3rem]"
                        :class="{
                            'text-[#603CB7]': route().current(menu.routeName),
                        }"
                        >{{ menu.name }}</span
                    >
                </Link>
            </li>
        </ul>
    </div>
</template>
<style scoped>
ul {
    height: calc(100vh - 4rem);
}
</style>
