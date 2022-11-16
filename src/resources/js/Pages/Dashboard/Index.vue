<template>
    <Head title="Dashboard" />

    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

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

                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <h1 v-if="!accommodationsList.length">Please search</h1>
                    <ul>
                        <li v-for="acc in accommodationsList" v-bind:key="acc.id">
                            {{ acc.address }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import dashboardGet from '../../Composables/DashboardGet'
import { Head } from '@inertiajs/inertia-vue3';
import { ref, watch } from 'vue'

const props = defineProps({
    regions: Object,
    accommodations: Object,
    groups: Object,
})

const userInput = ref('');
let accommodationsList = ref([]);

watch(userInput, _.debounce(() => {
    console.log(userInput)
    dashboardGet(userInput).then(data => accommodationsList.value = data.data);
}, 500))

</script>
