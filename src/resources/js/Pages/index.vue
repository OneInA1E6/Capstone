<template>
    <Head title="Glohaven Emergency Management Solutions" />
        <span>
            <img src="..\..\images\fire-burning-down-a-building.jpg" class="opacity-20 relative items-center justify-center w-full h-100 bg-hero bg-no-repeat bg-cover bg-center bg-fixed">
                <div class="flex items-center justify-center object-center">
                    <img src="..\..\images\GEMSLogo.svg" class="absolute top-0 items-center justify-center object-center w-2/5 ">
                    <div v-if="canLogin" class="absolute inset-y-1/2">
                        <NavLink v-if="$page.props.auth.user" :href="route('dashboard')" class="flex justify-center w-40 h-10 my-2 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md "  asType="button">Dashboard</NavLink>
                        <div v-else  class="items-center justify-center object-center flex">
                            <NavLink v-if="canRegister" :href="route('register')" class="flex justify-center w-40 h-10 my-2 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md "  asType="button">Register</NavLink>
                            <NavLink :href="route('login')" class="flex justify-center w-40 h-10 m-5 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md "  asType="button">Log in</NavLink>
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
