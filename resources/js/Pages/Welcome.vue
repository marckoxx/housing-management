<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    
});
</script>

<template>
    <Head title="Test Page" />
    <div>Hello world!</div>
    <v-img
  :width="300"
  aspect-ratio="16/9"
  cover
  src="https://cdn.vuetifyjs.com/images/parallax/material.jpg"
></v-img>
</template>

<style>

</style>
