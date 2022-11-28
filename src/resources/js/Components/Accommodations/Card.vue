<template>
    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
          <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{props.accommodation.address}}</h5>
          <p class="text-gray-700 text-base">id: {{props.accommodation.id}}</p>
          <p class="text-gray-700 text-base">Number of Available Rooms: {{props.accommodation.numRooms}}</p>
          <p class="text-gray-700 text-base">Number of Bookings: {{props.accommodation.bookings_count}}</p>
          <p class="text-gray-700 text-base">Rooms Available: {{props.accommodation.numRooms - props.accommodation.bookings_count}}</p>
          <NavLink :href="route('accommodations.editAccommodation', accommodation)"
          class="flex justify-center w-20 h-10 my-2 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md"
           asType="button">Edit</NavLink>
           <NavLink class="flex justify-center w-20 h-10 my-2 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md ml-5" v-on:click="deleteAccommodation(acc)" asType="button">Delete</NavLink>
        </div>
      </div>
</template>

<script setup>
import NavLink from '@/Components/NavLink.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    accommodation: Object,
})

const submit = () => {
    form.post(route('accommodations.create'), {
        onFinish: () => form.reset(),
    })
}

const deleteAccommodation = ($accommodation) => {
    Inertia.post(route('accommodations.delete', $accommodation));
}
</script>