<template>
    <div v-if="user">Logout</div>
    <div v-else>Login</div>
    <hr />
    <slot />
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(["user"]);
</script>
