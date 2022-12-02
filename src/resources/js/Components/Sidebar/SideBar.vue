
<template>
    <div class="grid min-h-screen grid-rows-5 bg-[#FA9C1B] place-items-center">
        <!-- header to the navbar -->
        <div class="grid row-span-2 place-items-center">
            <!-- placeholder image for logo -->
            <Link href="/dashboard">
                <ApplicationLogo class="fill-current text-gray-500" />
            </Link>
            <h2 class="mb-2 text-xl font-bold text-center text-white -mt-24">Glohaven Emergency Management Solutions</h2>
            <p> Hey, {{$page.props.auth.user.name }}</p>
        </div>

        <!-- Then the navigation to different pages -->

        <div class="row-span-2">

            <!-- Navigation items -->
            <div v-for="routeItem in props.routes" :key="routeItem">
                <NavLink :href="route(routeItem.str)" :active="route().current(routeItem.str)" asType="button"
                    class="flex justify-center w-40 h-10 m-5 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md">
                    <!-- font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md  -->
                    {{routeItem.title}}
                </NavLink>
            </div>
        </div>
        <div>
            <div>
                <NavLink :href="route('logout')" method="post"
                class="lex justify-center w-40 h-10 m-5 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md" asType="button">
                    Log Out
                </NavLink>
            </div>
        </div>

    </div>
</template>

<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link, Inertia } from '@inertiajs/inertia-vue3';

const props = defineProps({
    routes: Array
})
</script>
