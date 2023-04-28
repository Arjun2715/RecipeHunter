<script scope>
import Footer from "../Layouts/components/Footer.vue";
import Header from "../Layouts/components/Header.vue";
import RecentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
import Notifications from "../Layouts/components/Notifications.vue";
import DashNavVertical from "../Layouts/components/DashNavVertical.vue";


export default {
    components: {
        Header,
        Footer,
        RecentlyUpdated,
        Notifications,
        DashNavVertical,
    },

}
</script>
<template>
    <Header />
    <div class="flex flex-col lg:mt-20
">
        <div>
            <div class=" flex flex-col w-full ">
                <div class="container mx-auto px-4 w-full h-full ">
                    <div class="">
                        <div class="h-full">
                            <!-- dashboard here -->
                            <div class="lg:flex flex-cols justify-between hidden  ">
                                <div class="mx-6 my-4">
                                    <!-- 20% dashboard nav here -->
                                    <DashNavVertical />
                                </div>
                                <div class="flex flex-col w-full h-full">
                                    <div class="w-full mx-6 dark:bg-gray-700 my-4 rounded-2xl shadow-2xl">
                                        <!-- 70% dashboard panel here -->
                                        <!-- <Notifications /> -->
                                        <div id="bg-profile" name="bg-profile"
                                            class="flex flex-col   rounded-t-2xl  h-[200px] bg-gradient-to-r from-lemon-20 to-green-20">
                                            <div class="relative">
                                                <div
                                                    class="absolute rounded-full w-42 h-42 bg-white dark:bg-gray-600 top-28 left-24 shadow-lg">
                                                    <img class="" src="assets/images/profile.png" alt="">
                                                </div>
                                                <div class="absolute rounded-xl w-10 h-10  bg-white top-36 right-16">
                                                    <div class="image-upload">
                                                        <label for="file-input"><img src="assets/images/camera.gif"
                                                                alt=""></label>
                                                        <input id="file-input" type="file" />
                                                    </div>
                                                </div>
                                                <div class="absolute   top-28 left-56">
                                                    <div class="mt-28 mb-4 px-16 font-medium text-2xl text-gray-600  
                                                                                dark:text-white">
                                                        Email Notifications
                                                        <p class="text-sm font-thin">You can set up Themesberg to get email
                                                            notifications </p>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <form action="post">
                                            <div class="mt-28 mb-12 px-16 flex flex-col justify-center mx-44  space-y-4">
                                                <div class="flex flex-col mb-2">
                                                    <div class="flex flex-row justify-between">
                                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">
                                                            Rating reminders
                                                        </div>
                                                        <label class="relative inline-flex  cursor-pointer">
                                                            <input type="checkbox" value="" class="sr-only peer">
                                                            <div
                                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-20
                                                                 dark:peer-focus:ring-green-80 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full
                                                                  peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white
                                                                   after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600
                                                                    peer-checked:bg-green">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <p class="text-sm font-light text-gray-600 dark:text-white">Send an
                                                        email reminding me to rate an item a week after purchase</p>
                                                </div>
                                                <div class="flex flex-col mb-2">
                                                    <div class="flex flex-row justify-between">
                                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">
                                                            Update notifications
                                                        </div>
                                                        <label class="relative inline-flex  cursor-pointer">
                                                            <input type="checkbox" value="" class="sr-only peer">
                                                            <div
                                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-20
                                                                 dark:peer-focus:ring-green-80 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full
                                                                  peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white
                                                                   after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600
                                                                    peer-checked:bg-green">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <p class="text-sm font-light text-gray-600 dark:text-white">Send user and recipes notifications</p>
                                                </div>
                                                <div class="flex flex-col mb-2">
                                                    <div class="flex flex-row justify-between">
                                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">
                                                            Review notifications
                                                        </div>
                                                        <label class="relative inline-flex  cursor-pointer">
                                                            <input type="checkbox" value="" class="sr-only peer">
                                                            <div
                                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-20
                                                                 dark:peer-focus:ring-green-80 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full
                                                                  peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white
                                                                   after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600
                                                                    peer-checked:bg-green">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <p class="text-sm font-light text-gray-600 dark:text-white">Send me an email when someone leaves a review</p>
                                                </div>

                                                <Link href="">
                                                <button type="submit"
                                                    class="btn w-fit  px-6 bg-gradient-to-r from-lemon to-green border-none  outline-none border-gray-300 text-gray-900 text-sm font-bold  
                                                   focus:ring-lemon  focus:border-lemon rounded-xl  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-lemon dark:text-gray-00">
                                                   Save All</button>
                                                </Link>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>

<style>
.image-upload>input {
    display: none;

}

</style>
