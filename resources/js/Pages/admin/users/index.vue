<script setup>
import Navbar from "@/Components/Navbar.vue";
import { Head, Link, useForm, router } from "@inertiajs/vue3";
import { ref, watch } from "vue";
const props = defineProps({
    users: Object,
});

const goBack = () => {
    window.history.back(); // This will navigate back one step in the browser history
};

const form = useForm(props.users);
const destroy = (id) => {
    if (confirm("Are you sure?")) {
        form.delete(route("users.destroy", id));
    }
};

let search = ref("");

watch(search, (value) => {
    router.get("/users", { search: value }, { preserveState: true });
});

const resetSearch = () => {
    search.value = "";
};
</script>

<template>
    <Head title="Index - Users" />
    <v-layout>
        <Navbar />
        <v-main>
            <div class="container-fluid">
                <v-btn icon @click="goBack">
                    <i class="fa-solid fa-arrow-left"></i>
                </v-btn>
                <div class="row">
                    <div class="p-0 col-lg-10" style="height: 100vh">
                        <div
                            class="col-sm-2 col-lg-6 order-sm-1 mt-5 ms-4"
                        ></div>
                        <div class="ms-auto mt-n1 col-auto pe-3 mt-3">
                            <div class="row my-4">
                                <div class="col-sm-6 col-lg-6">
                                    <Link :href="route('users.create')"
                                        ><v-btn>Add a user</v-btn></Link
                                    >
                                </div>
                                <div class="col-sm-3 col-lg-3 w-30 ms-5 my-3">
                                    <!-- Adjusted width to 75% -->
                                    <div
                                        class="position-relative mb-lg-2 d-flex align-items-center"
                                    >
                                        <i class="ai-search fs-lg me-2"></i>
                                        <input
                                            class="form-control rounded-pill flex-grow-1"
                                            style="border: 1px solid"
                                            type="search"
                                            placeholder="Enter keywords.."
                                            v-model="search"
                                        />
                                    </div>
                                </div>
                            </div>
                            <table class="table mx-5">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template
                                        v-for="user in users"
                                        :key="user.id"
                                    >
                                        <tr>
                                            <td>{{ user.id }}</td>
                                            <td>{{ user.name }}</td>
                                            <td>{{ user.email }}</td>
                                            <td>
                                                <Link
                                                    :href="
                                                        route(
                                                            'users.edit',
                                                            user.id
                                                        )
                                                    "
                                                    ><v-btn>Edit</v-btn></Link
                                                >
                                            </td>
                                            <td>
                                                <v-btn
                                                    color="red"
                                                    @click="destroy(user.id)"
                                                    >Delete</v-btn
                                                >
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </v-main>
    </v-layout>
</template>
