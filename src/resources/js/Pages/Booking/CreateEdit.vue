<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Bookings
            </h2>
        </template>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form @submit.prevent="submit">
                    <div>
                        <InputLabel for="group_id" value="Group ID" />
                        <TextInput id="group_id" type="text" class="mt-1 block w-full" v-model="form.group_id"/>
                        <InputError class="mt-2" :message="form.group_id" />
                    </div>
                    <div>
                        <InputLabel for="duration" value="Duration of Stay" />
                        <TextInput id="duration" type="text" class="mt-1 block w-full" v-model="form.duration"/>
                        <InputError class="mt-2" :message="form.duration" />
                    </div>
                    <div>
                        <InputLabel for="accommodation_id" value="Accommodation ID" />
                        <TextInput id="accommodation_Id" type="text" class="mt-1 block w-full" v-model="form.accommodation_id"/>
                        <InputError class="mt-2" :message="form.accommodation_id" />
                    </div>

                    <div class="flex justify-end mt-4">
                        <Button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            {{props.edit ? 'Update' : 'Submit'}}
                        </Button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
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

