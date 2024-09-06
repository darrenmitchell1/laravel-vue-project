<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import ProductIndex from '@/Components/Product/Index';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <GuestLayout>
        <Head title="Products" />

        <ProductIndex></ProductIndex>
    </GuestLayout>
</template>