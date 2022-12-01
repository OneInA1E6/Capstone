<template>
    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <p class="text-gray-700 text-base">Booking ID: {{booking.id}}</p>
            <p class="text-gray-700 text-base">Accommodation ID: {{booking.accommodation_id}}</p>
            <p class="text-gray-700 text-base">Stay Duration: {{booking.accommodation_id}}</p>
            <div class="flex justify-between mt-5">
                <NavLink :href="route('bookings.editBooking', booking)"
                class="flex justify-center w-20 h-10 my-2 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md"
                asType="button">Edit</NavLink>
                <NavLink  v-on:click="deleteBooking(booking)" class="flex justify-center w-10 h-10 my-2 bg-red-400 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md ml-5" asType="button">
                    <DeleteIcon/>
                </NavLink>
            </div>
            
        </div>
    </div>
</template>

<script setup>
import NavLink from '@/Components/NavLink.vue';
import DeleteIcon from 'vue-material-design-icons/Delete.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    booking: Object,
})

const deleteBooking = ($booking) => {
        Inertia.post(route('deleteBooking', $booking))
}
</script>