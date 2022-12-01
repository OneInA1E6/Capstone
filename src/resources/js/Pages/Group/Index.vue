<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Groups
            </h2>
        </template>

        <div>
            <div>
                <NavLink :href="route('groups.create')"
                    class="flex justify-center h-10 my-2 px-8 bg-green-400 font-normal text-white bg-orange-300 rounded-full w-55 hover:bg-orange-350 drop-shadow-md "
                     asType="button">
                    Create New Group
                </NavLink>
            </div>
            <div class="grid grid-cols-4 py-12 mt-4 space-y-2 ">
                <template v-for="group in props.groups" :key="group.id" class="w-11/12 h-auto py-1 ">
                    <Card :group="group"/>
                </template>
            </div>
        </div>
    </AppLayout>

</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Card from '@/Components/Groups/Card.vue'
import NavLink from '@/Components/NavLink.vue';

const props = defineProps({
    groups: Object
})

// const viewGroup = (group) => {
//         Inertia.get(route('groups.show', group))
// }
</script>
