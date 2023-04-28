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
                            <div class="flex flex-cols justify-center   ">
                                <div class="hidden lg:flex mr-6 my-4">
                                    <DashNavVertical />
                                </div>
                                <div class="flex flex-col ">
                                    <div class="w-full  dark:bg-gray-700 my-4 rounded-2xl shadow-2xl">
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
                                            </div>

                                        </div>
                                        <div class="mt-28 mb-4 px-16 font-medium text-2xl text-gray-600  
                                                            dark:text-white">
                                            Juan Vidal
                                        </div>
                                        <div class=" flex flex-row px-16 font-medium text-sm text-gray-600  
                                                            dark:text-white">
                                            <img class="w-[30px] mr-4" src="assets/images/flag.png" alt="">Barcelona, Spain

                                        </div>
                                   
                                        <div class="px-16 py-4 ">
                                            <div
                                                class=" ">
                                                <h3
                                                    class="dark:text-white font-bold text-2xl ">
                                                    General information</h3>
                                                <dl >
                                                    <div class="py-4">
                                                        <dt
                                                            class="text-gray-400">
                                                            About me</dt>
                                                        <dd
                                                            class="dark:text-white">
                                                            <p>Tincidunt quam neque in cursus viverra orci, dapibus nec
                                                                tristique. Nullam ut sit dolor consectetur urna, dui cras
                                                                nec sed. Cursus risus congue arcu aenean posuere aliquam.
                                                            </p>
                                                            <p>Et vivamus lorem pulvinar nascetur non. Pulvinar a sed platea
                                                                rhoncus ac mauris amet. Urna, sem pretium sit pretium urna,
                                                                senectus vitae. Scelerisque fermentum, cursus felis dui
                                                                suspendisse velit pharetra. Augue et duis cursus maecenas
                                                                eget quam lectus. Accumsan vitae nascetur pharetra rhoncus
                                                                praesent dictum risus suspendisse.</p>
                                                        </dd>
                                                    </div>
                                                    <div class="py-4">
                                                        <dt
                                                            class="text-gray-400">
                                                            Join Date</dt>
                                                        <dd
                                                            class="dark:text-white">
                                                            12-09-2021 </dd>
                                                    </div>
                                                    <div class="py-4">
                                                        <dt
                                                            class="text-gray-400">
                                                            Languages</dt>
                                                        <dd
                                                            class="dark:text-white">
                                                            English, Spanish </dd>
                                                    </div>
                                                    <div class="py-4">
                                                        <dt
                                                            class="text-gray-400">
                                                            Birthday</dt>
                                                        <dd
                                                        class="dark:text-white">
                                                        15-08-1990 </dd>
                                                </div>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<Footer /></template>

<style>.image-upload>input {
    display: none;
}</style>
