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

        <div class = "flex items-center justify-center">
                <table class="table-auto border-separate border text-center w-screen">
                    <thead>
                        <tr>
                            <th class="border">Group Id</th>
                            <th class="border">Accommodation Id</th>
                            <th class="border">Duration</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="book in booking" :key="booking.groupId">
                            <td class="border">{{book.group_id}}</td>
                            <td class="border">{{book.accommodation_id}}</td>
                            <td class="border">{{book.duration}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>





    </AppLayout>

</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Button from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
const props = defineProps({
    booking: Object,
})
const form = useForm({
    groupId: '',
    duration: '',
});
const submit = () => {
    form.post(route('bookings.create'), {
        onFinish: () => form.reset(),
    })
  }
</script>
