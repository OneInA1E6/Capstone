<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Groups
            </h2>
        </template>

        <div class="grid grid-cols-2 py-12 mt-4">
            <Card v-for="group in props.groups" :key="group.id">
                <pre>
                    {{group}}
                </pre>
            </Card>

        </div>

        <Card> My cool dudes named jackie</Card>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <pre>
                            {{props.groups}}
                        </pre>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>

</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Card from '@/Components/Card.vue'

const props = defineProps({
    groups: Object
})
</script>
