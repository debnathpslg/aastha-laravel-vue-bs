<template>
    <h1>Login</h1>
    <hr />
    <p>Enter your email and password to login</p>

    <form action="#" method="post" @submit.prevent="login">
        <div>
            <label>Email</label>
            <input type="text" v-model="form.email" name="email" />
        </div>
        <div>
            <label>Password</label>
            <input type="password" v-model="form.password" name="password" />
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>

    <Link :href="route('home')">Go to Dashboard Page</Link>
</template>

<script setup>
import { Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    email: null,
    password: null,
});

const login = () => form.post(route("validateLogin"));
</script>

<script>
import AltLayout from "@/Layouts/AltLayout.vue";

export default {
    layout: AltLayout,
};
</script>
