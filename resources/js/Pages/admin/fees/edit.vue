<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
const props = defineProps(
    {
        fee: Object
    }
)
const goBack = () => {
  window.history.back(); // This will navigate back one step in the browser history
};
const form = useForm(props.fee);
</script>

<template>
        <Head title="Create - Fees" />
        <div class="container-fluid ">
            <v-btn icon @click="goBack">
                    <i class="fa-solid fa-arrow-left"></i>
                </v-btn>
            <div class="row">
                <div class="p-0 col-lg-10 " style=" height: 100vh;">
                    <div class="col-sm-2 col-lg-6 order-sm-1 mt-5 ms-4">
                    </div>
                    <div class="ms-auto mt-n1 col-auto pe-3 mt-3 my-5 ">
                    <form action="" @submit.prevent="form.put(route('fees.update',form.id))" style=" width: 75%; margin-left:50px ;">
                        <div>
                            <label for="fee_name">Name</label>
                            <input class="form-control" type="text" name="fee_name" id="fee_name" v-model="form.paymentName">
                        </div>
                        <div>
                            <label for="fee_desc">Description</label>
                            <input class="form-control" type="text" name="fee_desc" id="fee_desc" v-model="form.description">
                        </div>

                        <div>
                            <label for="fee_amount">Amount</label>
                            <input class="form-control" type="text" name="fee_amount" id="fee_amount" v-model="form.defAmount">
                        </div>

                        <v-container fluid>
                            <label for="fee_status">Is Current</label>
                            <v-radio-group inline name="fee_status" id="fee_status" v-model="form.isCurrent">
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
