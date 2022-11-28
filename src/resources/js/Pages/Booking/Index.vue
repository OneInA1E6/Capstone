<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Bookings
            </h2>
        </template>

        <div>
            <NavLink :href="route('createBooking')" class="flex justify-center w-40 h-10 my-2 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md "  asType="button">Create New Booking</NavLink>
        </div>
        <div v-if="$page.props.flash.message" class="mb-4 text-right text-blue-600">
            {{$page.props.flash.message}}
        </div>

        <!-- <div class = "flex items-center justify-center">
                <table class="w-screen text-center border border-separate table-auto">
                    <thead>
                        <tr>
                            <th class="border">Group Id</th>
                            <th class="border">Accommodation Id</th>
                            <th class="border">Duration</th>
                            <th class="border">Delete</th>
                            <th class="border">Edit</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="book in booking" :key="booking.groupId">
                            <td class="border">{{book.group_id}}</td>
                            <td class="border">{{book.accommodation_id}}</td>
                            <td class="border">{{book.duration}}</td>
                            <td class="border"> <img src="..\..\..\mdiIcons\mdiIcons.svg" class = "flex w-6 h-6 mx-auto cursor-pointer"  v-on:click="deleteBooking(book)"> </td>
                            <td class="border">
                            <NavLink :href="route('bookings.editBooking', book)"
                                class="flex justify-center w-20 h-10 my-2 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md "
                                :as="button">Edit</NavLink>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div> -->

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
