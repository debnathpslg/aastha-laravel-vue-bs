<template>
    <Header></Header>
    <SideBar></SideBar>

    <slot />
    <main id="main" class="main">
    </main>
    <Footer></Footer>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import Footer from "@/Layouts/Footer.vue";
import Header from "@/Layouts/Header.vue";
import SideBar from "@/Layouts/SideBar.vue";

defineProps(["currentUser"]);
</script>
