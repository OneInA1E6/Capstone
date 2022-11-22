<template>
    <Head title="Glohaven Emergency Management Solutions" />

    
    
        <span>
            <img src="..\..\images\fire-burning-down-a-building.jpg" class = "justify-center items-center relative w-screen h-screen">
                <div class = " flex justify-center items-center object-center">
                    <img src="..\..\images\GEMSLogo.svg" class=" w-1/3 h-2/4 justify-center items-center object-center absolute top-0 p-10">
                    
                        <div v-if="canLogin" class = " items-center justify-center object-center absolute top-0 p-[420px] flex ">
                            <NavLink v-if="$page.props.auth.user" :href="route('dashboard')" class="justify-center text-white flex w-40 h-10 my-2 font-normal bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md " :as="button">Dashboard</NavLink>

                            <div v-else  class = " items-center justify-center object-center flex absolute p-[420px]">
                                <NavLink v-if="canRegister" :href="route('register')" class="justify-center text-white  flex w-40 h-10 my-2 font-normal bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md " :as="button">Register</NavLink>
                                <NavLink :href="route('login')" class="justify-center text-white flex w-40 h-10 my-2 font-normal bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md " :as="button">Log in</NavLink>
                            </div>
                        </div>
                    </div>
        </span>
  
  
  
  
  
        
        
        
    
</template>

<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>
