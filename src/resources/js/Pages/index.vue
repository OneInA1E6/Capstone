<template>
    <Head title="Glohaven Emergency Management Solutions" />

    
    
        <span>
            <img src="..\..\images\fire-burning-down-a-building.jpg" class = "justify-center items-center relative w-screen h-screen flex">
                <div class = " flex justify-center items-center">
                    <img src="..\..\images\GH-logo.jpg" class=" w-1/3 h-2/4 justify-center object-center absolute top-0 p-10">
                    
                    <div v-if="canLogin" class="hidden">
                        <button v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</button>

                        <template v-else>
                            <button :href="route('login')" class="text-sm text-gray-700 dark:text-gray-500">Log in</button>

                            <button v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</button>
                        </template>
                    </div>
                </div> 
        </span>
  
  
  
  
  
        
        
        
    
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
