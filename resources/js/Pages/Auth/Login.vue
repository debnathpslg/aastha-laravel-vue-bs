<template>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4"
            >
                <div class="container">
                    <div class="row justify-content-center">
                        <div
                            class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center"
                        >
                            <div class="d-flex justify-content-center py-4">
                                <Link
                                    :href="route('home')"
                                    class="logo d-flex align-items-center w-auto"
                                >
                                    <img
                                        src="/storage/assets/img/logo.png"
                                        alt=""
                                    />
                                    <span class="d-none d-lg-block"
                                        >NextHome</span
                                    >
                                </Link>
                            </div>
                            <!-- End Logo -->

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5
                                            class="card-title text-center pb-0 fs-4"
                                        >
                                            Login to Your Account
                                        </h5>
                                        <p class="text-center small">
                                            Enter your email & password to login
                                        </p>
                                    </div>

                                    <form
                                        class="row g-3 needs-validation"
                                        @submit.prevent="login"
                                        method="POST"
                                        novalidate
                                    >
                                        <div class="col-12">
                                            <label
                                                for="email"
                                                class="form-label"
                                                >Email</label
                                            >
                                            <div
                                                class="input-group has-validation"
                                            >
                                                <span
                                                    class="input-group-text"
                                                    id="inputGroupPrepend"
                                                    >@</span
                                                >
                                                <input
                                                    type="email"
                                                    v-model="form.email"
                                                    name="email"
                                                    class="form-control"
                                                    :class="
                                                        form.errors.email
                                                            ? 'is-invalid'
                                                            : ''
                                                    "
                                                    id="email"
                                                    placeholder="Email"
                                                    required
                                                />
                                                <div class="invalid-feedback">
                                                    {{ form.errors.email }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label
                                                for="password"
                                                class="form-label"
                                                >Password</label
                                            >
                                            <input
                                                type="password"
                                                v-model="form.password"
                                                name="password"
                                                class="form-control"
                                                :class="
                                                    form.errors.password
                                                        ? 'is-invalid'
                                                        : ''
                                                "
                                                id="password"
                                                placeholder="Password"
                                                required
                                            />
                                            <div class="invalid-feedback">
                                                {{ form.errors.password }}
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button
                                                class="btn btn-primary w-100"
                                                type="submit"
                                            >
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by
                                <a href="https://bootstrapmade.com/"
                                    >BootstrapMade</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
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
