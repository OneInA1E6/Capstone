<template>


    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Accommodations
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit"> 
                            <p>Address: 
                                <input v-model="form.address" placeholder="edit me" />
                            </p>
                            <p>Number of rooms available: 
                                <input v-model="form.numRooms" placeholder="edit me" />
                            </p>

                            <Button :disabled="form.processing">
                                    Submit
                            </Button>
                        </form>
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{props.accNumRooms}}
                    </div>
                </div>
            </div>
        </div>
        <pre>
            {{props.accommodationsAll}}
        </pre>
    </AppLayout>
</template>

<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { useForm } from '@inertiajs/inertia-vue3';
    import Button from '@/Components/PrimaryButton.vue';

    const form = useForm({
        address: '',
        numRooms: '',
    });

    const props = defineProps({
        accommodationsAll: Object,
        accNumRooms: Object
    })

    const submit = () => {
        form.post(route('accommodations.create'), {
            onFinish: () => form.reset(),
        })
    }
</script>
