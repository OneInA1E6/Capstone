
<template>

    <div class="grid min-h-screen grid-rows-5 bg-orange-500 place-items-center">
        <!-- header to the navbar -->
        <div class="grid row-span-2 place-items-center">
            <!-- placeholder image for logo -->
            <img class="w-3/5" src="https://i.pinimg.com/736x/03/8b/20/038b2098ca63da45822fb4ce1c91bfd9--vida-real-realistic-drawings.jpg" />
            <h2 class="mb-2 text-xl font-bold text-center text-white">Emergency Management Solutions</h2>
            <p> Hey, {{$page.props.auth.user.name }}</p>
        </div>

        <!-- Then the navigation to different pages -->

        <div class="row-span-2">

            <!-- Navigation items -->
            <div v-for="routeItem in props.routes" :key="routeItem"
                class="w-40 p-2 px-6 my-2 text-center bg-gray-300 rounded-full drop-shadow-md">

                <NavLink :href="route(routeItem.str)" :active="route().current(routeItem.str)" :as="button">
                    {{routeItem.title}}
                </NavLink>
            </div>
        </div>
        <div>
            <div class="w-40 p-2 px-6 my-2 text-center bg-gray-300 rounded-full drop-shadow-md">
                <NavLink :href="route('logout')" method="post">
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
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    routes: Array
})
</script>
