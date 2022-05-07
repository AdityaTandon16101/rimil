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
</script>

<template>
    <nav class="bg-transparent">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex justify-between w-full">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <Link :href="route('index')">
                            <ApplicationLogo class="block h-9 w-auto" />
                        </Link>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <div class="flex gap-8 h-full leading-[4rem] text-xl">
                            <ul class="flex gap-6">
                                <li>
                                    <Link href="#about">About</Link>
                                </li>
                                <li>
                                    <Link href="#contact">Contact</Link>
                                </li>
                            </ul>
                            <ul class="flex gap-4">
                                <li>
                                    <Link :href="route('login')">Login</Link>
                                </li>
                                <li>
                                    <Link :href="route('register')"
                                        >Register</Link
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative"></div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button
                        @click="
                            showingNavigationDropdown =
                                !showingNavigationDropdown
                        "
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                    >
                        <svg
                            class="h-6 w-6"
                            stroke="currentColor"
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
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div
            :class="{
                block: showingNavigationDropdown,
                hidden: !showingNavigationDropdown,
            }"
            class="sm:hidden"
        >
            <div class="pt-2 pb-3 space-y-1">
                <ResponsiveNavLink
                    :href="route('index')"
                    :active="route().current('index')"
                >
                    Dashboard
                </ResponsiveNavLink>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">
                        <!-- {{ $page.props.auth.user.name }} -->
                    </div>
                    <div class="font-medium text-sm text-gray-500">
                        <!-- {{ $page.props.auth.user.email }} -->
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- <ResponsiveNavLink
                        :href="route('logout')"
                        method="post"
                        as="button"
                    >
                        Log Out
                    </ResponsiveNavLink> -->
                </div>
            </div>
        </div>
    </nav>
</template>
