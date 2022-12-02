<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
        href:{
            type: String,
            default: '',
        },
        active: {
            type: Boolean,
            default: false
        },
        asType: {
            type: String,
            default: "link"
        },
    });

const classes = computed(() => props.active
    ? 'inline-flex items-center px-1 pt-1 border-b-2 border-gray text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition  duration-150 ease-in-out'
    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out'
);
</script>

<template>
    <Link :href="props.href" :class="classes"  :as="props.asType">
        <slot />
    </Link>
</template>
