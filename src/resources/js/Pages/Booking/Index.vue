<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Bookings
            </h2>
        </template>
    
        <div class = "flex items-center justify-center">
            <table class="table table-striped table-bordered text-center w-screen">
                        <tr>
                            <th>Group Id</th>
                            <th>Duration</th>
                        </tr>
                    
                        <tr v-for="book in booking" :key="booking.groupId">
                            <td>{{book.groupId}}</td>
                            <td>{{book.duration}}</td>
                        </tr>

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
