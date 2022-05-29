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
    <div class="title hidden md:block">Rimil Trade</div>
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
      <li class="flex gap-x-2 px-4 h-12">
        <Link :href="route('logout')" method="post" as="button">
          <span class="text-lg leading-[3rem] text-white">Log Out</span>
        </Link>
      </li>
    </ul>
  </div>
</template>
<style lang="scss">
@import "@scss/_variables";
#app {
  [sidebar] {
    width: 0;
    height: 100%;
    overflow: hidden;
    background-color: $primary;
    transition: all 0.2s;
    .title {
      padding-left: 1rem;
      height: $appHeaderHeight;
      line-height: $appHeaderHeight;
      font-size: 1.5em;
      color: #fff;
    }
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
  &.sidebar {
    [sidebar] {
      width: auto;
      overflow: visible;
      transition: all 0.2s;
    }
  }
}
</style>
