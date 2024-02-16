<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
const props = defineProps(
    {
        user: Object
    }
)
const goBack = () => {
  window.history.back(); // This will navigate back one step in the browser history
};
const form = useForm(props.user);
</script>

<template>
        <Head title="Create - Users" />
        <div class="container-fluid ">
            <v-btn icon @click="goBack">
                    <i class="fa-solid fa-arrow-left"></i>
                </v-btn>
            <div class="row">
                <div class="p-0 col-lg-10 " style=" height: 100vh;">
                    <div class="col-sm-2 col-lg-6 order-sm-1 mt-5 ms-4">
                    </div>
                    <div class="ms-auto mt-n1 col-auto pe-3 mt-3 my-5 ">
                    <form action="" @submit.prevent="form.put(route('users.update',form.id))" style=" width: 75%; margin-left:50px ;">
                        <div>
                            <label for="user_name">Name</label>
                            <input class="form-control" type="text" name="user_name" id="user_name" v-model="form.paymentName">
                        </div>
                        <div>
                            <label for="user_desc">Description</label>
                            <input class="form-control" type="text" name="user_desc" id="user_desc" v-model="form.description">
                        </div>

                        <div>
                            <label for="user_amount">Amount</label>
                            <input class="form-control" type="text" name="user_amount" id="user_amount" v-model="form.defAmount">
                        </div>

                        <v-container fluid>
                            <label for="user_status">Is Current</label>
                            <v-radio-group inline name="user_status" id="user_status" v-model="form.isCurrent">
                                <v-radio label="True" value="1"></v-radio>
                                <v-radio label="False" value="0"></v-radio>
                            </v-radio-group>
                        </v-container>
                        <button type="submit" :disabled="form.processing">
                            Update
                        </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</template>

<style scoped>

</style>
