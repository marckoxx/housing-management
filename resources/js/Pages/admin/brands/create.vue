<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';

import sidepanel from '@/Layouts/sidepanel.vue'
const props = defineProps(
    {
        brands: Object
    }
)

const form = useForm({
    name: '',
});
</script>

<template>
        <Head title="Add a Brand" />
        <div class="container-fluid ">
            <div class="row">
                <sidepanel />
                <div class="p-0 col-lg-10 " style=" height: 100vh;">
                <Layout />
                    <div class="col-sm-2 col-lg-6 order-sm-1 mt-5 ms-4">
                        <Link class="btn" :href="route('management')">
                            <i class="back-btn fa-solid fa-circle-arrow-left " style="font-size: 20px; color: blueviolet;"> Go Back  </i>
                        </Link>
                    </div>
                    <div class="ms-auto mt-n1 col-auto pe-3 mt-3 my-5 ">
                    <form action="" @submit.prevent="form.post(route('brands.store'))" style=" width: 75%; margin-left:50px ;">
                        <div>
                            <label for="brand_name">Barangay Name</label>
                            <input class="form-control" type="text" name="brand_name" id="brand_name" v-model="form.name"
                                placeholder="Honda">
                        </div>
                        <button type="submit" :disabled="form.processing">
                            Create
                        </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</template>

<style scoped>
form-control{
    height: auto;
    margin: 15px 0 10px 0;
}
label{
    font-weight: bold;
}

button{
    padding: 6px;
    border: 0px;
    margin-top: 15px;
    width: 30%;
    border-radius: 50px ;
    text-decoration: none;
    color: black;
    height: auto;
    transition: 1s ease;
    background-color: rgb(47, 255, 85);
}


button:hover {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    transition: 1s ease;
    transition: 1s ease;
}
</style>
