<script setup>
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps(["canLogin", "canRegister"]);
</script>

<template>
  <div class="flex flex-col py-8 px-16 lg:flex-row hero">
    <div>
      <p class="text-[2.85em] font-bold lg:text-[4.2em] head">Welcome to Rimil Trades</p>
      <p class="text-[1.2em] uppercase lg:text-[1.4em] subtitle">
        THIS IS THE BEST WEBSITE TO EARN MONEY COME & JOIN US
      </p>
      <ul v-if="props.canLogin && props.canRegister" class="flex mt-4">
        <li v-if="props.canLogin">
          <Link :href="route('login')"> Login </Link>
        </li>
        <li v-if="props.canRegister">
          <Link :href="route('register')"> Register </Link>
        </li>
      </ul>
    </div>
    <div class="hidden py-2 lg:block">
      <img src="/assets/hero.png" alt="HERO IMAGE" />
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@scss/variables";

.hero {
  background-color: $primary;
  * {
    color: #fff;
  }

  p.head {
    margin: 1.4em 0 0 0;
    font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
  }
  p.subtitle {
    margin: 0.5em 0;
  }

  ul {
    li {
      @include authLink;
      padding: 0.5em 2em;
      a {
        text-decoration: none;
        font-size: 1.25em;
        color: #fff;
      }
    }
  }
  img {
    object-fit: fill;
    width: 100%;
    height: 100%;
  }
}
</style>
