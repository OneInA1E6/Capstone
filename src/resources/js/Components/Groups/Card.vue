<template>
    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <p class="text-gray-700 text-base">Contact: {{group.contact_firstname}} {{group.contact_lastname}}</p>
            <p class="text-gray-700 text-base">Group Members: {{group.group_size}}</p>
            <p class="text-gray-700 text-base">Group ID: {{group.id}}</p>
            <!-- <div class="border m-15 bg-slate-100 hover:cursor-pointer" v-on:click="viewGroup(group.id)">
                <EyeIcon/>
            </div> -->
            <NavLink class="flex justify-center w-20 h-10 my-2 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md" v-on:click="editGroup(group.id)">
                <CogIcon/>
            </NavLink>
            <NavLink class="flex justify-center w-20 h-10 my-2 font-normal text-white bg-orange-300 rounded-full hover:bg-orange-350 drop-shadow-md ml-5" v-on:click="deleteGroup(group.id)">
                <DeleteIcon/>
            </NavLink>
        </div>
    </div>
</template>

<script setup>
import EyeIcon from 'vue-material-design-icons/Eye.vue';
import CogIcon from 'vue-material-design-icons/Cog.vue';
import DeleteIcon from 'vue-material-design-icons/Delete.vue';
import NavLink from '@/Components/NavLink.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    group: Object,
})

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