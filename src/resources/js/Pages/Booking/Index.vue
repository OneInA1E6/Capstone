<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Bookings
            </h2>
        </template>

        <div>
            <NavLink :href="route('createBooking')" class="flex justify-center h-10 my-2 px-8 bg-green-400 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md "  asType="button">Create New Booking</NavLink>
        </div>
        <div v-if="$page.props.flash.message" class="mb-4 text-right text-blue-600">
            {{$page.props.flash.message}}
        </div>

        <div class="grid grid-cols-4 py-12 mt-4 space-y-2 ">
            <template v-for="book in booking" :key="book.id" class="w-11/12 h-auto py-1 ">
                <Card :booking="book"/>
            </template>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import Card from '@/Components/Bookings/Card.vue'

const props = defineProps({
    booking: Object,

})
    confirm = false
</script>
