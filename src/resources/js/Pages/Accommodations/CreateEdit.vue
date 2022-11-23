<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Accommodations
            </h2>
        </template>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form @submit.prevent="submit">
                    <!-- <div>
                        <InputLabel for="ID" value="ID" />
                        <TextInput id="ID" type="text" class="mt-1 block w-full" v-model="form.groupId"/>
                        <InputError class="mt-2" :message="form.groupId" />
                    </div> -->
                    <div>
                        <InputLabel for="address" value="Address" />
                        <TextInput id="address" type="text" class="mt-1 block w-full" v-model="form.address"/>
                        <InputError class="mt-2" :message="form.address" />
                    </div>
                    <div>
                        <InputLabel for="numRooms" value="Number of rooms available" />
                        <TextInput id="numRooms" type="text" class="mt-1 block w-full" v-model="form.numRooms"/>
                        <InputError class="mt-2" :message="form.numRooms" />
                    </div>

                    <div class="flex justify-end mt-4">
                        <Button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Submit
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
    accommodationsAll: Object,
    accNumRooms: Object
})
const form = useForm({
    address: '',
    numRooms: '',
});
const submit = () => {
    form.post(route('accommodations.create'), {
        onFinish: () => form.reset(),
    })
  }
</script>