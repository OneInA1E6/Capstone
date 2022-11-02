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
                        <input type="search" 
                            class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                            placeholder="Search" 
                            aria-label="Search" 
                            aria-describedby="button-addon2"
                            v-model="query"
                            >
                            
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <ul id="example-1">
                        <li v-for="qitem in queryTest" v-bind:key="qitem.id">
                            {{ qitem.id | 0}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { ref, watch } from 'vue'
import { Head } from '@inertiajs/inertia-vue3';
import axios from 'axios';



const props = defineProps({
    regions: Object,
    accommodations: Object,
    groups: Object,
})

const query = ref('');
let queryTest = ref([]);

watch(queryTest, e => {
    console.log("testing " + e)
})

const items = [
      { message: 'Foo', id: 0 },
      { message: 'Bar', id: 1 }
    ]

const test = async () => {
    await axios.get(route('accommodations.test', query))
    .then(res => {
        queryTest = res.data;
    })
    console.log(queryTest)
}

watch(query, () => {
    test();
    console.log(queryTest)
})
</script>
