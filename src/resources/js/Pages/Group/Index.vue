<template>
    <Layout>
        I am very cool
        <pre>
            {{props.groups}}
        </pre>

    </Layout>

</template>

<script setup>
import Layout from '@/Layouts/AppLayout.vue'

const props = defineProps({
    groups: Object
})
</script>
