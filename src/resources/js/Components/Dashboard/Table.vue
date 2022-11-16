<template>
    <!-- <template v-if="loading">
        <h1>Loading...</h1>
    </template> -->
    <div>
    <table class="table p-4 bg-white shadow rounded-lg w-full">
        <thead>
            <tr>
                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                    #
                </th>
                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                    Address
                </th>
                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                    # of Rooms
                </th>
                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                    Date Created
                </th>
                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                    Date Updated
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-gray-700" v-for="acc in accommodationsList" v-bind:key="acc.id"> 
                <td class="border-b-2 p-4 dark:border-dark-5">
                    {{ acc.id }}
                </td>
                <td class="border-b-2 p-4 dark:border-dark-5">
                    {{ acc.address }}
                </td>
                <td class="border-b-2 p-4 dark:border-dark-5">
                    {{ acc.numRooms }}
                </td>
                <td class="border-b-2 p-4 dark:border-dark-5">
                    {{ acc.created_at }}
                </td>
                <td class="border-b-2 p-4 dark:border-dark-5">
                    {{ acc.updated_at }}
                </td>
            </tr>
        </tbody>
    </table>
    <Pagination :links="pag"/>
    </div>
    
</template>

<script setup>
import dashboardGet from '../../Composables/DashboardGet'
import Pagination from '../Pagination.vue'
import { ref, watch } from 'vue'
import axios from 'axios';

const props = defineProps({
    query: String,
})

let accommodationsList = ref([]);
let pag = ref([]);
let query = ref(0);
let loading = ref(false);

watch(props, _.debounce(() => {
    query.value = props.query.length;
    loading.value = true;
    dashboardGet(props).then(data => {
        accommodationsList.value = data.data;
        pag.value = data.links
        console.log(pag)
    });
    loading.value = false;
}, 500))

</script>