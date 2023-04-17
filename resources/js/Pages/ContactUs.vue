<script scope>
import Footer from "../Layouts/components/Footer.vue";
import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
import RecentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
export default {
    components: {
        RecipeHunterLayout,
        Footer,
        RecentlyUpdated,
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
                            <div
                                class="font-bold text-transparent lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                                Contact Us</div>

                        </div>
                        <div class="flex flex-col w-auto">
                            <div class="flex justify-center mt-10">
                            <div class=" flex flex-col font-medium text-lg text-gray-600 dark:text-white">Name

                                <input type="text"
                                    class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                     focus:ring-green focus:border-green rounded-xl   p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                     dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                    placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="flex justify-center mt-5">
                            <div class=" flex flex-col font-medium text-lg text-gray-600 dark:text-white">Email

                                <input type="text"
                                    class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                     focus:ring-green focus:border-green rounded-xl   p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                     dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                    placeholder="Enter your email">
                            </div>

                        </div>
                        <div class="flex justify-center mt-5">
                            <div class=" flex flex-col font-medium text-lg text-gray-600 dark:text-white">Comment

                                <textarea type="text"
                                    class="  border-2 border-gray-300 text-gray-900 text-sm  h-40
                                                     focus:ring-green focus:border-green rounded-xl   p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                     dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                    placeholder="" />
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
