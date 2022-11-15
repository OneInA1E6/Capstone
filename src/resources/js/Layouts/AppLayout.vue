
<template>
    <div class="grid grid-cols-3 md:grid-cols-5 lg:grid-cols-7">

        <SideBar :routes="routeList"/>

        <!-- Main content of the page -->
        <div class="col-span-2 p-6 md:col-span-4 lg:col-span-6">
                <!-- Page Heading -->
                <header class="bg-white shadow" v-if="$slots.header">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <slot name="header" />
                    </div>
                </header>

                <!-- Page Content -->
                <main>
                    <slot />
                </main>
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

import SideBar from '@/Components/Sidebar/SideBar.vue'

const showingNavigationDropdown = ref(false);

const routeList = [
        {"str": "dashboard",         "title": "Dashboard"},
        {"str": "accommodations",   "title": "Accommodations"},
        {"str": "groups",           "title": "Groups"},
        {"str": "bookings",         "title": "Bookings"},
        // {"str": , "title": "Dashboard"},
    ]
</script>
