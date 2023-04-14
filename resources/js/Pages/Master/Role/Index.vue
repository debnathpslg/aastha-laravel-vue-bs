<template>
    <h1>Role Master</h1>
    <hr />
    <p>Here you can manage User roles like creating new role for user or list avaliable user roles or edit an existing role or delete a user role</p>

    <Link :href="route('home')">Go to Dashboard Page</Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
