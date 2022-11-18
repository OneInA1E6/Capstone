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
                    <div class="mb-3 xl:w-96">
                        <div class="relative flex flex-wrap items-stretch w-full mb-4 input-group">
                        <input type="search"
                            class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Search"
                            aria-label="Search"
                            aria-describedby="button-addon2"
                            v-model="userInput"
                            >
                        </div>
                    </div>
                </div>
                <Table :query="`${userInput}`"/>
                        </div>
                    </div>
    </AppLayout>
</template>

<script setup>
import Table from '../../Components/Dashboard/Table.vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import dashboardGet from '../../Composables/DashboardGet'
import { Head } from '@inertiajs/inertia-vue3';
import { ref, watch } from 'vue'

const props = defineProps({
    regions: Object,
    accommodations: Object,
    groups: Object,
    loading: Boolean,
})

const userInput = ref('');
</script>
