<template>
    <div v-if="currentUser">
        <Link :href="route('logout')" method="delete" as="button">Logout</Link>
    </div>
    <div v-else>
        <Link :href="route('login')">Login</Link>
    </div>
    <hr />
    <slot />
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(["currentUser"]);
</script>
