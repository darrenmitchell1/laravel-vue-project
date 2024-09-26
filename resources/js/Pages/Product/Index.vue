<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import ProductIndex from '@/Components/Product/Index.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    products: {
        type: Array,
    },
});

</script>

<template>
    <GuestLayout>
        <Head title="Products" />

        <ProductIndex :products="products"></ProductIndex>
    </GuestLayout>
</template>
