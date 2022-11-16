<template>
    <Head title="Glohaven Emergency Management Solutions" />

    
    <div class="w-full h-screen justify-center items-center relative z-0">
        <img src="..\..\images\fire-burning-down-a-building.jpg">
    </div>
    <div class = "bg-white w-1/3 h-4/6 flex absolute inset-0 flex justify-center items-center z-10 top-0 right-0 px-6 py-4 ">
            <img src="..\..\images\GH-logo.jpg" class="justify-center w-1/2 h-5/12">
    </div>
  
  
  
  
  
  
        <!-- <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</Link>
            </template>
        </div> -->
        
        
    
</template>

<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>