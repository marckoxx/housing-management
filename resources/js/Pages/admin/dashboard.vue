<template>
    <v-layout>
        <Navbar />
        <v-main>
            <h1>Index</h1>
            <v-list>
                <Link :href="route('fees.index')"><v-list-item>Manage Fees</v-list-item></Link>
                <Link :href="route('users.index')"><v-list-item>Manage Users</v-list-item></Link>
            </v-list>
        </v-main>
    </v-layout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import NavDrawer from "@/Components/NavDrawer.vue";
import Navbar from "@/Components/Navbar.vue";
</script>
