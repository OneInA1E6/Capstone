<template>
    <AppLayout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"> 
                    <div>
                        <InputLabel value="Number of rooms available" />
                        <div>
                            {{props.accommodationsData.id}}
                        </div>
                        <InputLabel value="Address" />
                        <div>
                            {{props.accommodationsData.address}}
                        </div>
                        <InputLabel value="Number of Rooms" />
                        <div>
                            {{props.accommodationsData.numRooms}}
                        </div>
                        <InputLabel value="Created at" />
                        <div>
                            {{props.accommodationsData.created_at}}
                        </div>
                        <InputLabel value="Updated at" />
                        <div>
                            {{props.accommodationsData.updated_at}}
                        </div>
                    </div>

                    <div class="flex justify-end mt-4">
                        <Button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Submit
                        </Button>
                    </div>
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
    accommodationsData: Object,
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