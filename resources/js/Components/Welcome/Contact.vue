<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
  firstName: ``,
  lastName: ``,
  email: ``,
  phone: ``,
  message: ``,
});

const submit = () => {
  form.post(route("contact"), {
    onFinish: () => form.reset(),
  });
};
</script>

<template>
  <div class="flex flex-col gap-6 lg:flex-row" id="contact">
    <div class="lg:w-1/2">
      <h4>Contact Us</h4>
      <h3>Get In Touch</h3>
      <form method="post">
        <div class="row">
          <div class="col-lg-6">
            <input
              type="text"
              name="first_name"
              v-model="form.firstName"
              placeholder="First Name"
            />
          </div>
          <div class="col-lg-6">
            <input
              type="text"
              name="last_name"
              v-model="form.lastName"
              placeholder="Last Name"
            />
          </div>
          <div class="col-12">
            <input
              type="email"
              name="email"
              v-model="form.email"
              placeholder="Email Address"
            />
          </div>
          <div class="col-12">
            <input
              type="tel"
              name="phone"
              v-model="form.phone"
              placeholder="Phone Number"
            />
          </div>
          <div class="col-12">
            <textarea
              name="message"
              cols="30"
              rows="15"
              v-model="form.message"
              placeholder="message"
            ></textarea>
          </div>
        </div>
        <div class="col">
          <button
            @click="submit"
            type="submit"
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
          >
            Submit
          </button>
        </div>
      </form>
    </div>
    <div class="hidden lg:block">
      <img src="/assets/contact.png" alt="contact image" />
    </div>
  </div>
</template>

<style lang="scss" scoped>
@import "@scss/_variables";
#contact {
  form {
    input {
      margin: 0.75em 0;
      @include input;
    }
    textarea {
      resize: vertical;
      min-height: 5rem;
      max-height: 12rem;
      @include input;
    }
    button {
      @include authLink;
      margin: 1em;
      padding: 0.6em 1.75em;
      background-color: $primary;
      color: #fff;
      font-size: 1.25em;
      font-weight: bold;
      &:hover {
        color: $primary;
      }
    }
  }
}
</style>
