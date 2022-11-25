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
                    :as="button">
                    Create New Group
                </NavLink>
            </div>
            <div class="grid grid-cols-2 py-12 mt-4">
                <Card v-for="group in props.groups" :key="group.id" class="w-full h-auto">
                    <div class="flex flex-row">
                        <div class="text-xl font-medium capitalize basis-1/2">
                            Contact: {{group.contact_firstname}} {{group.contact_lastname}}
                        </div>
                        <div class="basis-1/2">
                            Group Members: {{group.group_size}}
                        </div>
                        <div>

                            <td class="border">
                                <img src="..\..\..\MdiIcons\mdiIcons.svg" class = "flex justify-center w-6 h-6" v-on:click="deleteGroup(group.id)">
                            </td>
                        </div>

                        <!-- <pre>
                            {{group}}
                        </pre> -->
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
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    groups: Object
})

const deleteGroup = (group) => {
    console.log('rerekjrekjrkejkjrje' + group)
        Inertia.delete(route('groups.delete', group), {
            preserveScroll: true
        }
        )
}
</script>
