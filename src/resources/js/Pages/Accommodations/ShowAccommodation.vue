<template>
    <AppLayout>
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">{{props.accommodationsData.address}}</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Accommodation details</p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Number of Rooms Available</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{props.accommodationsData.numRooms}}</dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Last Updated</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{props.accommodationsData.created_at}}</dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Created Date</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{props.accommodationsData.created_at}}</dd>
            </div>
            </dl>
        </div>
    </div>

    <div class="flex justify-end mt-4">
        <div class="flex justify-end mt-4">
            <NavLink :href="route('accommodations.edit',props.accommodationsData.id)" 
                class="justify-center text-white flex w-20 h-10 my-2 font-normal bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md "
                :as="button">
                Edit
            </NavLink>
        </div>
    </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import { useForm, watch } from '@inertiajs/inertia-vue3';

const props = defineProps({
    accommodationsData: Object,
})

// watch(props, (e) => {
//     console.log(e)
// })

const form = useForm({
    address: '',
    numRooms: '',
});

const submit = () => {
    form.post(route('accommodations.create'), {
        onFinish: () => form.reset(),
    })
  }
</script>