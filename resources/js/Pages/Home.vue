<template>
        <h1>Dashboard</h1>
        <hr />
        <p>Hello World. This is the main dashboard for our application.</p>

        <Link :href="route('role.index')">Go to Role Master Page</Link> |
        <Link :href="route('designation.index')">Go to Deisgnation Master Page</Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
