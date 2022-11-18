<template>
    <Head title="Glohaven Emergency Management Solutions" />

    
    
        <span>
            <img src="..\..\images\fire-burning-down-a-building.jpg" class = "justify-center items-center relative w-screen h-screen flex">
                <div class = " flex justify-center items-center">
                    <img src="..\..\images\GH-logo.jpg" class="justify-center object-center absolute top-0 py-10">
                </div> 
        </span>
  
  
  
  
  
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
