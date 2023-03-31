<script scope>
import navbar from "../Layouts/components/AuthNav.vue";
import { Link } from "@inertiajs/vue3";
export default {
    components: {
        navbar,
    },
    data() {
        return {
            emailValue: "",
            passwordValue: "",
        };
    },
};
</script>
<template>
    <!-- <navbar /> -->
    <nav
        class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3"
    >
        <div class="container px-4 mx-auto flex items-center justify-between">
            <div
                class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
            >
                <a
                    class="text-xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-gray-500"
                    href="#"
                    >Recipe Hunter</a
                >
            </div>
            <div class="flex px-2">
                <router-link
                    to="/login"
                    class="btn flex-1 w-12 rounded-l-full btn-active bg-gradient-to-r from-lemon to-green border-none shadow hover:shadow-lg"
                    @click="goToLogin"
                >
                    Login
                </router-link>

                <router-link
                    to="register"
                    class="btn flex-1 w-32 rounded-r-full border-none shadow hover:shadow-lg"
                    @click="goToSignup"
                >
                    SignUp
                </router-link>
            </div>
        </div>
    </nav>
    <main>
        <section class="absolute w-full h-full">
            <div class="container mx-auto px-4 h-full">
                <div
                    class="flex content-center items-center justify-center h-full"
                >
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="rounded-t mb-0 px-6 py-6">
                            <form>
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password"
                                        >Email</label
                                    ><input v-model="emailValue"
                                        type="email"
                                        id="email"
                                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Email"
                                        style="transition: all 0.15s ease 0s"
                                    />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                        for="grid-password"
                                        >Password</label
                                    ><input v-model="passwordValue"
                                        type="password"
                                        id="password"
                                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                        placeholder="Password"
                                        style="transition: all 0.15s ease 0s"
                                    />
                                </div>
                                <div>
                                    <label
                                        class="inline-flex items-center cursor-pointer"
                                        ><input
                                            id="customCheckLogin"
                                            type="checkbox"
                                            class="form-checkbox border-0 rounded text-gray-800 ml-1 w-5 h-5"
                                            style="
                                                transition: all 0.15s ease 0s;
                                            "
                                        /><span
                                            class="ml-2 text-sm font-semibold text-gray-700"
                                            >Remember me</span
                                        ></label
                                    >
                                </div>
                                <div class="text-center mt-6">
                                    <Link
                                        class="bg-gradient-to-r from-lemon to-green text-white active:bg-gray-700 text-sm font-bold border-none uppercase px-6 py-3 rounded-full shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                        style="transition: all 0.15s ease 0s"
                                        href="/login"
                                        method="post"
                                        as="button"
                                        type="button"
                                        :data="{
                                            email: emailValue,
                                            password: passwordValue,
                                        }"
                                    >
                                        Sign In
                                    </Link>
                                </div>
                            </form>
                        </div>
                        <div class="flex flex-wrap mt-6">
                            <div class="w-1/2">
                                <a href="#" class="text-gray-300"
                                    ><small>Forgot password?</small></a
                                >
                            </div>
                            <div class="w-1/2 text-right">
                                <a href="#" class="text-gray-300"
                                    ><small>Create new account</small></a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
