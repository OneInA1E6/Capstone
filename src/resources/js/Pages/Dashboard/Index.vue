<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="flex justify-center">
                    <div class="mb-3 xl:w-96">
                        <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
                        <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <pre>
                        {{props.groups}}
                    </pre>

                    <pre>
                        {{props.accommodations}}
                    </pre>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SearchBar from '@/Components/SearchBar.vue'
import { Head } from '@inertiajs/inertia-vue3';

const props = defineProps({
    regions: Object,
    accommodations: Object,
    groups: Object,
})

console.log(props.groups[1].id)

</script>
