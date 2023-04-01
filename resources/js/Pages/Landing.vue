<script scope>
    // import navbar from "../Layouts/components/AuthNav.vue";
    export default {
    }
</script>
<template>
    <!-- <navbar /> -->

    <main>
        <section class="absolute w-full h-full">
            <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
                <div class="container px-4 mx-auto flex  items-center justify-between">
                    <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                        <a class="text-xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-gray-500"
                            href="#">Recipe Hunter</a>
                    </div>
                    <div class="flex  px-2 ">
                        <router-link to="/login"
                            class="btn  mr-4 flex-1 w-12 rounded-full   bg-gradient-to-r from-lemon to-green border-none shadow hover:shadow-lg "
                            @click="goToLogin">
                            Login
                        </router-link>
                        <router-link to="register"
                            class="btn flex-1 w-32 rounded-full   bg-gradient-to-r from-lemon to-green border-none shadow hover:shadow-lg"
                            @click="goToSignup">
                            SignUp
                        </router-link>
                    </div>
                </div>
            </nav>
            <div class="">

            </div>
        </section>
    </main>
</template>
