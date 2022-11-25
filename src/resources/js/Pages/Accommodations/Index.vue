<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Accommodations
            </h2>
        </template>
        <div>
            <NavLink :href="route('accommodations.createAccommodation')"
                class="flex justify-center h-10 my-2 font-normal text-white bg-orange-300 rounded-full w-55 hover:bg-orange-350 drop-shadow-md "
                 asType="button">Create New Accommodation</NavLink>
        </div>
        <div v-if="$page.props.flash.message" class="mb-4 text-right text-blue-600">
            {{$page.props.flash.message}}
        </div>
        
        <div class="flex items-center justify-center">
            <table class="w-screen text-center border border-separate table-auto">
                <thead>
                    <tr>
                        <th class="border">ID</th>
                        <th class="border">Address</th>
                        <th class="border">Number of rooms total</th>
                        <th class="border">Number of bookings</th>
                        <th class="border">Number of rooms available</th>
                        <th class="border">Edit</th>
                        <th class="border">Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="acc in accommodationsAll" :key="accommodationsAll.id">
                        <td class="border">{{ acc.id }}</td>
                        <td class="border">{{ acc.address }}</td>
                        <td class="border">{{ acc.numRooms }}</td>
                        <td class="border">{{ acc.bookings_count }}</td>
                        <td class="border">{{ acc.numRooms - acc.bookings_count}}</td>
                        <td class="border">
                            <NavLink :href="route('accommodations.editAccommodation', acc)"
                                class="flex justify-center w-20 h-10 my-2 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md "
                                 asType="button">Edit</NavLink>
                        </td>
                        <td class="border">
                            <img src="..\..\..\mdiIcons\mdiIcons.svg"
                                class = "flex w-6 h-6 mx-auto cursor-pointer"
                                v-on:click="deleteAccommodation(acc)">
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
import NavLink from '@/Components/NavLink.vue';
import { Inertia } from '@inertiajs/inertia';

const form = useForm({
    address: '',
    numRooms: '',
});

const props = defineProps({
    accommodationsAll: Object,
    accNumRooms: Object,
    accommodation: Object
})
    // confirm = false

const submit = () => {
    form.post(route('accommodations.create'), {
        onFinish: () => form.reset(),
    })
}

const deleteAccommodation = ($accommodation) => {
    Inertia.post(route('accommodations.delete', $accommodation));
}
</script>
