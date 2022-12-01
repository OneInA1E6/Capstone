<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Bookings
            </h2>
        </template>
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <form @submit.prevent="submit">
                <div class="border-t border-gray-200">
                    <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Group ID</dt>
                        <TextInput id="group_id" type="text" class="mt-1 block w-full" v-model="form.group_id"/>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Duration of Stay</dt>
                        <TextInput id="duration" type="text" class="mt-1 block w-full" v-model="form.duration"/>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Accommodation ID</dt>
                        <TextInput id="accommodation_Id" type="text" class="mt-1 block w-full" v-model="form.accommodation_id"/>
                    </div>
                    </dl>
                </div>

                <div class="flex justify-end m-4">
                    <Button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        {{props.edit ? 'Update' : 'Submit'}}
                    </Button>
                </div>
            </form>
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
    booking: {
        Object,
        default: {}
    },
    edit: {
        type: Boolean, 
        default: false
    }

})

const form = useForm({
    id: (props.booking) ? props.booking.id : null,
    group_id: (props.booking) ? props.booking.group_id : '',
    duration: (props.booking) ? props.booking.duration :'',
    accommodation_id: (props.booking) ? props.booking.accommodation_id :'',
});
const submit = () => {
        form.post((props.edit) ? route('bookings.edit', props.booking) : route('bookings.create'), {
        onFinish: () => form.reset(),
    })
}
</script>

