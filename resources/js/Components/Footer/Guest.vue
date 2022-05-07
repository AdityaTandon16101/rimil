<script setup>
import ApplicationLogo from "@x/ApplicationLogo.vue";

const props = defineProps(["appName"]);
</script>

<template>
  <footer>
    <div class="container">
      <div class="flex justify-between flex-col gap-4 px-5 md:flex-row md:gap-8 md:px-12">
        <div class="logo w-1/3">
          <a :href="route('index')">
            <ApplicationLogo
              class="block h-20 w-auto fill-current text-gray-600"
              clr="#fff"
            />
          </a>
          <p class="mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo alias asperiores
            eaque temporibus magni laboriosam fugiat facilis animi nihil sapiente?
          </p>
        </div>
        <div class="w-1/3">
          <h4 class="text-2xl mb-2">Quick Links</h4>
          <ul>
            <li><a :href="route('login')">Login</a></li>
            <li><a :href="route('register')">Register</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="w-1/3">
          <h4 class="text-2xl mb-2">Contact</h4>
          <p>Email: xyz@gmail.com</p>
          <p>phone: 1234567890</p>
        </div>
      </div>
    </div>
    <div class="copyright">
      <p>Copyright © 2022 {{ props.appName }}. All Rights Reserved.</p>
    </div>
  </footer>
</template>

<style lang="scss" scoped>
@import "@scss/_variables";
footer {
  padding: 3rem 0 0 0;
  background-color: $primary;
  & > *,
  a {
    color: #fff;
  }
  ul {
    li {
      list-style: none;
      a {
        text-decoration: none;
      }
    }
  }
  .copyright {
    margin: 3em 0 0 0;
    background-color: rgba($color: #000000, $alpha: 0.15);
    height: 2rem;
    line-height: 2rem;
    text-align: center;
  }
}
</style>
