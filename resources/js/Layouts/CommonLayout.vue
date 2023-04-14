<template>
    <div v-if="currentUser">Logout</div>
    <div v-else>Login</div>
    <hr />
    <slot />
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(["currentUser"]);
</script>
