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
                    <div class="h-auto">
                        <div class="flex flex-row justify-between">
                            <!-- <div
                                    class="font-bold text-transparent lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                                    About Us</div> -->

                        </div>
                        <div class="h-full">
                            <!-- dashboard here -->
                            <div class="flex flex-cols justify-between hidden lg:flex ">
                                <div class="mx-6 my-4">
                                    <!-- 20% dashboard nav here -->
                                    <DashNavVertical />
                                </div>
                                <div class="w-full mx-6 my-4 rounded-2xl shadow-2xl">
                                    <!-- 70% dashboard panel here -->
                                    <!-- <Notifications /> -->
                                    
                                </div>
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<Footer /></template>
