<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Accommodations
            </h2>
        </template>
        <div>
            <NavLink :href="route('accommodations.createAccommodation')"
                class="flex justify-center h-10 px-8 my-2 font-normal text-white bg-orange-300 bg-green-400 rounded-full w-55 hover:bg-orange-350 drop-shadow-md "
                 asType="button">Create New Accommodation</NavLink>
        </div>
        <div v-if="$page.props.flash.message" class="mb-4 text-right text-blue-600">
            {{$page.props.flash.message}}
        </div>

        <div class="grid grid-cols-2 gap-3" >
            <template v-for="acc in accommodationsAll" :key="acc">
                <Card :accommodation="acc"/>
            </template>
        </div>
    </AppLayout>
</template>

<script setup>
import Card from '../../Components/Accommodations/Card.vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import NavLink from '@/Components/NavLink.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';

const form = useForm({
    address: '',
    numRooms: '',
});

const props = defineProps({
    accommodationsAll: Object,
})

const submit = () => {
    form.post(route('accommodations.create'), {
        onFinish: () => form.reset(),
    })
}

const deleteAccommodation = ($accommodation) => {
    Inertia.post(route('accommodations.delete', $accommodation));
}
</script>
