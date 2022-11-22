<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Bookings
            </h2>
        </template>      
        
        <div class = "flex items-center justify-center">
                <table class="table-auto border-separate border text-center w-screen">
                    <thead>
                        <tr>
                            <th class="border">Group Id</th>
                            <th class="border">Duration</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="book in booking" :key="booking.groupId">
                            <td class="border">{{book.groupId}}</td>
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
