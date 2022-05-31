<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import ApplicationLogo from "@x/ApplicationLogo.vue";
import NavLink from "@x/NavLink.vue";
import Dropdown from "@x/Dropdown.vue";
import DropdownLink from "@x/DropdownLink.vue";
import ResponsiveNavLink from "@x/ResponsiveNavLink.vue";

defineProps(["title"]);

const showingNavigationDropdown = ref(false);
const isScrolled = ref(false);

const scrollFunction = () => {
  let st = document.documentElement.scrollTop;

  isScrolled.value = st > 100 ? true : false;
  // lastScrollTop = st <= 0 ? 0 : st;
};

window.addEventListener("scroll", scrollFunction, false);
</script>

<template>
  <header :class="{ scrolled: isScrolled }">
    <div class="flex justify-between">
      <div class="shrink-0 flex items-center">
        <Link :href="route('index')">
          <ApplicationLogo clr="#fff" class="block h-9 w-auto text-white" />
        </Link>
      </div>
      <div class="my-auto md:hidden">
        <svg
          @click="showingNavigationDropdown = !showingNavigationDropdown"
          class="h-6 w-6"
          stroke="#fff"
          fill="none"
          viewBox="0 0 24 24"
        >
          <path
            :class="{
              hidden: showingNavigationDropdown,
              'inline-flex': !showingNavigationDropdown,
            }"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"
          />
          <path
            :class="{
              hidden: !showingNavigationDropdown,
              'inline-flex': showingNavigationDropdown,
            }"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M6 18L18 6M6 6l12 12"
          />
        </svg>
      </div>
    </div>
    <div class="hidden md:flex gap-8 h-full leading-[4rem] text-xl">
      <ul class="flex gap-6">
        <li>
          <Link href="#about">About</Link>
        </li>
        <li>
          <Link href="#contact">Contact</Link>
        </li>
      </ul>
      <ul class="flex gap-4 guestauth">
        <li>
          <Link :href="route('login')">Login</Link>
        </li>
        <li>
          <Link :href="route('register')">Register</Link>
        </li>
      </ul>
    </div>
    <div
      :class="{
        hidden: !showingNavigationDropdown,
        block: showingNavigationDropdown,
      }"
      data-mobile
    >
      <div>
        <ul class="flex flex-col gap-3 p-4">
          <li>
            <Link href="#about">About</Link>
          </li>
          <li>
            <Link href="#contact">Contact</Link>
          </li>
          <li>
            <Link :href="route('login')">Login</Link>
          </li>
          <li>
            <Link :href="route('register')">Register</Link>
          </li>
        </ul>
      </div>
    </div>
  </header>
</template>

<style lang="scss" scoped>
@import "@scss/_variables";
header {
  position: fixed;
  top: 0;
  display: flex;
  justify-content: space-between;
  padding: 0 5rem;
  height: $guestHeaderHeight;
  width: 100%;
  z-index: 999;
  transition: all 0.3s ease-in-out;

  ul:not(.flex-col) {
    li {
      list-style: none;
      height: calc($guestHeaderHeight - 2rem);
      line-height: calc($guestHeaderHeight - 2rem);
      margin: 1rem 0;
      a {
        text-decoration: none;
        color: #fff !important;
      }
    }
  }

  &.scrolled {
    $guestHeaderHeight: 4rem;
    height: $guestHeaderHeight;
    background-color: rgba($color: $primary, $alpha: 0.85);
    transition: all 0.3s ease-in-out;

    ul {
      li {
        height: calc($guestHeaderHeight - 2rem);
        line-height: calc($guestHeaderHeight - 2rem);
        margin: 1rem 0;
        transition: all 0.3s ease-in-out;
      }
    }
  }

  ul.guestauth {
    margin: auto 0 auto 1em;
    li {
      @include authLink;
    }
  }
}

@media only screen and (max-width: 600px) {
  header {
    flex-direction: column;
    gap: 1em;
    [data-mobile] {
      ul {
        background-color: #4e51af;
        li {
          a {
            color: #fff;
          }
        }
      }
    }
  }
}
</style>
