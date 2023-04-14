<template>
    <h1>Designation Master</h1>
    <hr />
    <p>
        Here you can manage User designations like creating new designation for
        user or list avaliable user designations or edit an existing designation
        or delete a user designation
    </p>

    <Link :href="route('home')">Go to Dashboard Page</Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

// defineOptions({ layout: AltLayout });
</script>

<script>
import AltLayout from "@/Layouts/AltLayout.vue";

export default {
    layout: AltLayout,
};
</script>
