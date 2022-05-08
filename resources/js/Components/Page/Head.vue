<template>
    <div
        class="flex my-2 h-12 justify-end px-4"
        :class="{ 'justify-between': $slots.left }"
    >
        <div class="bg-white leading-[3rem] px-6" v-if="$slots.left">
            <slot name="left" />
        </div>
        <slot />
    </div>
</template>
