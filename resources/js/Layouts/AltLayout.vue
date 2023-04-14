<template>
    <div v-if="currentUser">
        <Link :href="route('logout')" method="delete" as="button">Logout</Link>
    </div>
    <div v-else>
        <Link :href="route('login')">Login</Link>
    </div>
    <br />
    <p>This is alternate layout to be viewed in a specific page.</p>
    <hr />
    <slot />
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(["currentUser"]);
</script>
