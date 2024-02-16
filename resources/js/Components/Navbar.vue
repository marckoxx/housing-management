<template>
    <v-app-bar scroll-behavior="hide" scroll-threshold="48">
        <template v-slot:prepend>
            <v-app-bar-nav-icon @click.stop="drawer = !drawer" class="d-md-none"
                ><i class="fa-solid fa-bars"></i
            ></v-app-bar-nav-icon>
            <Link :href="route('home')"><v-btn>Logo</v-btn></Link>
        </template>

        <v-app-bar-title>Ciudad de Zamboanga</v-app-bar-title>

        <template v-slot:append>
            <div class="d-none d-md-flex">
                <Link
                    v-for="(item, index) in navitems"
                    :key="index"
                    :href="route(item.link)"
                >
                    <v-btn>
                        <span>{{ item.name }}</span>
                    </v-btn>
                </Link>
            </div>
            <v-menu :location="location">
                <template v-slot:activator="{ props }">
                    <v-btn v-bind="props">
                        <i class="fa-solid fa-caret-down"></i>
                    </v-btn>
                </template>
                <v-list>
                    <v-btn
                        @click="toggleTheme"
                        v-if="theme.global.current.value.dark"
                        ><i class="fa-regular fa-sun"> Switch to Light</i></v-btn
                    >
                    <v-btn @click="toggleTheme" v-else
                        ><i class="fa-solid fa-moon"> Switch to Dark</i></v-btn
                    >
                </v-list>
            </v-menu>
        </template>
    </v-app-bar>
    <v-navigation-drawer v-model="drawer" temporary class="d-md-none">
        <div v-for="(item, index) in navitems" :key="index">
            <Link :href="route(item.link)"
                ><v-list-item nav>{{ item.name }}</v-list-item></Link
            >
            <v-divider />
        </div>
    </v-navigation-drawer>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import useThemeToggle from "@/Composables/useThemeToggle";
import { useTheme } from "vuetify/lib/framework.mjs";
const { toggleTheme } = useThemeToggle();
const theme = useTheme();

const drawer = ref(null);

const navitems = [
    { name: "Home", link: "home" },
    { name: "Admin", link: "admindash" },
];
</script>
