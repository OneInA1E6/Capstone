<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Accommodations
            </h2>
        </template>

    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <form @submit.prevent="submit">
            <div class="border-t border-gray-200">
                <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Address</dt>
                    <TextInput id="address" type="text" class="mt-1 block w-full" v-model="form.address"/>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Number of Rooms Available</dt>
                    <TextInput id="numRooms" type="text" class="mt-1 block w-full" v-model="form.numRooms"/>
                </div>
                </dl>
            </div>

            <div class="flex justify-end mt-4">
                <Button class="m-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
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
    // accommodationsAll: Object,
    // accNumRooms: Object,
    accommodation: {
        type: Object, 
        default: {}
    },
    edit: {
        type: Boolean, 
        default: false
    }
})
const form = useForm({
    address: (props.accommodation) ? props.accommodation.address : '',
    numRooms: (props.accommodation) ? props.accommodation.numRooms : '',
    id: (props.accommodation) ? props.accommodation.id : null,
});
const submit = () => {
    form.post((props.edit) ? route('accommodations.edit', props.accommodation) : route('accommodations.create'), {
        onFinish: () => form.reset(),
    })
  }
</script>