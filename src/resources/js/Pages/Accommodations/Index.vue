<template>
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Accommodations
            </h2>
        </template>
        <div>
            <NavLink :href="route('accommodations.createAccommodation')"
                class="justify-center text-white  flex w-55 h-10 my-2 font-normal bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md "
                :as="button">Create New Accommodation</NavLink>
        </div>

        <div class="flex items-center justify-center">
            <table class="table-auto border-separate border text-center w-screen">
                <thead>
                    <tr>
                        <th class="border">ID</th>
                        <th class="border">Address</th>
                        <th class="border">Number of rooms available</th>
                        <th class="border">Edit</th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="acc in accommodationsAll" :key="accommodationsAll.id">
                        <td class="border">{{ acc.id }}</td>
                        <td class="border">{{ acc.address }}</td>
                        <td class="border">{{ acc.numRooms }}</td>
                        <td class="border">
                            <NavLink :href="route('accommodations.editAccommodation', acc)" 
                                class="justify-center text-white flex w-20 h-10 my-2 font-normal bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md "
                                :as="button">Edit</NavLink>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import Button from '@/Components/PrimaryButton.vue';
import NavLink from '@/Components/NavLink.vue';

const form = useForm({
    address: '',
    numRooms: '',
});

const props = defineProps({
    accommodationsAll: Object,
    accNumRooms: Object
})

const submit = () => {
    form.post(route('accommodations.create'), {
        onFinish: () => form.reset(),
    })
}
</script>
