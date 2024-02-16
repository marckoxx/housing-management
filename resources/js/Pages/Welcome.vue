<script setup>
import { Head, Link, } from "@inertiajs/vue3";
import { ref } from "vue";
import Navbar from '@/Components/Navbar.vue'
defineProps({});

const firstName = ref("");
const firstNameRules = [
    (value) => {
        if (value?.length > 3) return true;
        return "First name must be at least 3 characters.";
    },
];

const lastName = ref("123");
const lastNameRules = [
    (value) => {
        if (/[^0-9]/.test(value)) return true;
        return "Last name cannot contain digits.";
    },
];

</script>

<template>
    <Head title="Test Page" />
    <v-layout>
        <Navbar />
        <v-main class="d-flex align-center justify-center">
            <div>
                <v-sheet width="300" border rounded class="mx-auto pa-8 mt-16">
                    <v-form fast-fail @submit.prevent>
                        <v-text-field
                            v-model="firstName"
                            label="First name"
                            :rules="firstNameRules"
                        ></v-text-field>

                        <v-text-field
                            v-model="lastName"
                            label="Last name"
                            :rules="lastNameRules"
                        ></v-text-field>

                        <v-btn href="" type="submit" block class="mt-2">Submit</v-btn>
                    </v-form>
                </v-sheet>
            </div>
        </v-main>
    </v-layout>
</template>

<style></style>
