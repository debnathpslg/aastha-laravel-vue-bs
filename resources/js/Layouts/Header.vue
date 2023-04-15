<template>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <Link :href="route('home')" class="logo d-flex align-items-center">
                <img src="/storage/assets/img/logo.png" alt="" />
                <span class="d-none d-lg-block">NextHome</span>
            </Link>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link nav-icon"
                        href="#"
                        data-bs-toggle="dropdown"
                    >
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">{{
                            newMsg
                        }}</span> </a
                    ><!-- End Messages Icon -->

                    <ul
                        class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages"
                    >
                        <li class="dropdown-header">
                            You have {{ newMsg }} new messages
                            <a href="#"
                                ><span
                                    class="badge rounded-pill bg-primary p-2 ms-2"
                                    >View all</span
                                ></a
                            >
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <span v-for="item in latestMsg" :key="item.id">
                            <li class="message-item">
                                <a href="#">
                                    <img
                                        src="/storage/assets/img/messages-1.jpg"
                                        alt=""
                                        class="rounded-circle"
                                    />
                                    <div>
                                        <h4>{{ item.user.name }}</h4>
                                        <p>{{ item.body.substr(1, 50) }} ...</p>
                                        <p class="text-end fw-bold fst-italic">
                                            {{
                                                dayjs(item.updated_at).fromNow()
                                            }}
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                        </span>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>
                    </ul>
                    <!-- End Messages Dropdown Items -->
                </li>
                <!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">
                    <a
                        class="nav-link nav-profile d-flex align-items-center pe-0"
                        href="#"
                        data-bs-toggle="dropdown"
                    >
                        <img
                            src="/storage/assets/img/profile-img.jpg"
                            alt="Profile"
                            class="rounded-circle"
                        />
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{
                            user.name
                        }}</span> </a
                    ><!-- End Profile Iamge Icon -->

                    <ul
                        class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
                    >
                        <li class="dropdown-header">
                            <h6>{{ user.name }}</h6>
                            <span>{{ user.email }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <!-- <li>
                            <a
                                class="dropdown-item d-flex align-items-center"
                                href="#"
                            >
                                <i class="bi bi-gear"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li> -->

                        <li>
                            <a
                                class="dropdown-item d-flex align-items-center"
                                href="#"
                            >
                                <i class="bi bi-key"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <Link
                                class="dropdown-item d-flex align-items-center"
                                :href="route('logout')"
                                method="delete"
                                as="button"
                            >
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </Link>
                        </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->
</template>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import dayjs from "dayjs";
import relativeTime from "dayjs/plugin/relativeTime";

dayjs.extend(relativeTime);

// defineProps({
//     currentUser: Array,
// });

const page = usePage();
const user = computed(() => page.props.currentUser);
const newMsg = computed(() => page.props.newMsg);
const latestMsg = computed(() => page.props.latestMsg);

//dayjs(chirp.updated_at).fromNow()
</script>
