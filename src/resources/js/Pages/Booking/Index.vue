<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Bookings
            </h2>
        </template>      
        

        
        <div>
                <NavLink :href="route('createBooking')" class="justify-center text-white  flex w-40 h-10 my-2 font-normal bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md " :as="button">Create New Booking</NavLink>
        </div>
        <div v-if="$page.props.flash.message" class="text-blue-600 mb-4 text-right">
            {{$page.props.flash.message}}
        </div>
       
            
        
        

        <div class = "flex items-center justify-center">
                <table class="table-auto border-separate border text-center w-screen">
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
                            <td class="border"> <img src="..\..\..\MdiIcons\midIcons.svg" class = "mx-auto w-6 h-6 flex cursor-pointer"  v-on:click="deleteBooking(book)"> </td>
                            <td class="border">
                            <NavLink :href="route('bookings.editBooking', book)" 
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
import NavLink from '@/Components/NavLink.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    booking: Object,
   
})
    confirm = false

const form = useForm({
    groupId: '',
    duration: '',
});
const submit = () => {
    form.post(route('bookings.create'), {
        onFinish: () => form.reset(),
    })
  }

const deleteBooking = ($booking) => {
        Inertia.post(route('deleteBooking', $booking))
}
</script>
