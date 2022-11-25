<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Groups

                <!-- <pre>
                    {{props.groups[0]}}
                </pre> -->
            </h2>
        </template>

        <div>
            <div>
                <NavLink :href="route('groups.create')"
                    class="flex justify-center h-10 my-2 font-normal text-white bg-orange-300 rounded-full w-55 hover:bg-orange-350 drop-shadow-md "
                     asType="button">
                    Create New Group
                </NavLink>
            </div>
            <div class="grid grid-cols-2 py-12 mt-4 space-y-2 ">
                <Card v-for="group in props.groups" :key="group.id" class="w-11/12 h-auto py-1 ">
                    <div class="flex flex-row">
                        <div class="text-xl font-medium capitalize basis-1/2">
                            Contact: {{group.contact_firstname}} {{group.contact_lastname}}
                        </div>
                        <div class="basis-1/2">
                            Group Members: {{group.group_size}}
                        </div>
                        <div class="grid w-32 h-full grid-cols-2 m-2 space-x-1 text-xl place-items-center ">
                            <!-- <div class="border m-15 bg-slate-100 hover:cursor-pointer" v-on:click="viewGroup(group.id)">
                                <EyeIcon/>
                            </div> -->
                            <div class="border m-15 bg-slate-100 hover:cursor-pointer" v-on:click="editGroup(group.id)">
                                <CogIcon/>
                            </div>
                            <div class="border m-15 bg-slate-100 hover:cursor-pointer" v-on:click="deleteGroup(group.id)">
                                <DeleteIcon/>
                            </div>
                        </div>

                    </div>
                </Card>

            </div>


        </div>

    </AppLayout>

</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Card from '@/Components/Card.vue'
import NavLink from '@/Components/NavLink.vue';

import EyeIcon from 'vue-material-design-icons/Eye.vue';
import CogIcon from 'vue-material-design-icons/Cog.vue';
import DeleteIcon from 'vue-material-design-icons/Delete.vue';

import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    groups: Object
})

// const viewGroup = (group) => {
//         Inertia.get(route('groups.show', group))
// }
const editGroup = (group) => {
        Inertia.get(route('groups.edit', group))
}
const deleteGroup = (group) => {
        Inertia.delete(route('groups.delete', group), {
            preserveScroll: true
            }
        )
}
</script>
