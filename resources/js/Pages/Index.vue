<script setup>
import GuestLayout from "@layouts/Guest.vue";
import Hero from "@x/Welcome/Hero.vue";
import About from "@x/Welcome/About.vue";
import Contact from "@x/Welcome/Contact.vue";

const props = defineProps(["canLogin", "canRegister"]);
</script>

<template>
  <GuestLayout>
    <Hero :canLogin="props.canLogin" :canRegister="props.canRegister" />
    <About />
    <Contact />
  </GuestLayout>
</template>

<style lang="scss">
@import "@scss/_variables";
#about,
#contact {
  height: 100vh;
  padding: 4rem 3.5rem;
  margin-top: 3em;
  margin-bottom: 3em;
  h4 {
    @include title;
  }
  h3 {
    @include subTitle;
  }
  img {
    object-fit: fill;
    width: 100%;
    height: 100%;
  }
}
</style>
