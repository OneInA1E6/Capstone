<template>
    
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Accommodations
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Accommodations Tables testing 123 Does this work now
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
    </AuthenticatedLayout>
</template>

<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import SearchBar from '@/Components/SearchBar.vue'
    import { Head } from '@inertiajs/inertia-vue3';

    import { ref } from "vue";
    let input = ref("");
    const fruits = ["apple", "banana", "orange"];
    function filteredList() {
        return fruits.filter((fruit) =>
            fruit.toLowerCase().includes(input.value.toLowerCase())
    );
    }
    const props = defineProps({
        accommodationsAll: Object,
        accNumRooms: Object
    })
</script>
