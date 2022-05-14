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
    name: `Deposits`,
    routeName: `deposits.index`,
  },
  {
    name: `Withdraw`,
    routeName: `withdraws.index`,
  },
  {
    name: `Permanent Members`,
    routeName: `permanent-members.index`,
  },
  {
    name: `My Profile`,
    routeName: `profile`,
  },
  {
    name: "Bank Details",
    routeName: "profile.showbankdetails",
  },
  {
    name: "Change Password",
    routeName: "profile.show.passwordchange",
  },
];
</script>

<template>
  <div sidebar>
    <ul class="overflow-x-hidden overflow-y-auto">
      <li
        v-for="menu in menus"
        :key="menu.name"
        class="px-4 h-12"
        :class="{
          'border-l-4': route().current(menu.routeName),
        }"
      >
        <Link :href="route(menu.routeName)" class="flex gap-x-2">
          <span class="text-lg leading-[3rem]">{{ menu.name }}</span>
        </Link>
      </li>
    </ul>
  </div>
</template>
<style lang="scss" scoped>
@import "@scss/_variables";
[sidebar] {
  padding-top: $appHeaderHeight;
  background-color: $primary;
  ul {
    height: calc(100vh - 4rem);

    li {
      a span {
        color: #fff;
      }
    }

    li.border-l-4 {
      background: #fff;
      border-color: $primary;

      a span {
        color: #333;
      }
    }
  }
}
</style>
