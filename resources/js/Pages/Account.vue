<script scope>
import Footer from "../Layouts/components/Footer.vue";
import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
import RecentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
import Notifications from "../Layouts/components/Notifications.vue";
import DashNavVertical from "../Layouts/components/DashNavVertical.vue";


export default {
    components: {
        RecipeHunterLayout,
        Footer,
        RecentlyUpdated,
        Notifications,
        DashNavVertical,
    },

}
</script>
<template>
    <RecipeHunterLayout />
    <div class="flex flex-col lg:mt-8">
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
                                   
                                        <div class="px-16 py-4  ">
                                            
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
