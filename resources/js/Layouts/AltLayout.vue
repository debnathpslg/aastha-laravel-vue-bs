<template>
    <div v-if="currentUser">Logout</div>
    <div v-else>Login</div>
    <br />
    <p>This is alternate layout to be viewed in a specific page.</p>
    <hr />
    <slot />
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(["currentUser"]);
</script>


