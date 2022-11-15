<template>
    <AppLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Bookings
            </h2>
        </template>

        gabe is not cool
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <pre>
                            {{props.booking}}
                        </pre>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>

</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({
    booking: Object
})
</script>
