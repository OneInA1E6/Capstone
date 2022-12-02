<template>
    <Head title="Dashboard" />

    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center">
                    <div class="sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Accommodation Address</dt>
                            <input type="search"
                                class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Search address"
                                aria-label="Search"
                                required
                                v-model="query_address"
                                >
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Number of Rooms</dt>
                            <input type="search"
                                class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Search # of rooms"
                                aria-label="Search"
                                v-model="query_numRooms"
                                >
                        </div>
              
                    </div>
                </div>
                <Table :query_address="`${query_address}`" :query_numRooms="`${query_numRooms}`"/>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import Table from '../../Components/Dashboard/Table.vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { ref } from 'vue'

const props = defineProps({
    regions: Object,
    accommodations: Object,
    groups: Object,
    loading: Boolean,
})

const query_address = ref('');
const query_numRooms = ref(null);
</script>
