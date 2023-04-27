<script scope>
import Footer from "../Layouts/components/Footer.vue";
import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
import RecentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
import MainCarousel from "../Layouts/components/MainCard.vue";

export default {
    props: {
        data: Object,
    },
    components: {
        RecipeHunterLayout,
        Footer,
        RecentlyUpdated,
        MainCarousel,
    },

}
</script>
<template>
    <RecipeHunterLayout />
    <div class="flex flex-col mt-8">
        <div class=" flex flex-col w-full ">
            <div class="container mx-auto px-4 w-full h-full ">
                <div class="h-auto">
                    <div class="flex flex-row justify-between">
                        <div
                            class="font-bold text-transparent text-xl lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                            Recipe Details</div>
                        <div class="flex flex-row w-auto  ">
                            <Link href="/editrecipe"
                                class="lg:h-[50px]  md:h-[40px] h-[30px] w-auto font-medium  rounded-full bg-gradient-to-r from-lemon to-green border-none lg:text-xl px-4  cursor-pointer text-white dark:text-white hover:shadow-xl">
                            edit Recipe
                            </Link>
                        </div>
                    </div>
                    <p></p>
                    <div class="lg:flex flex-row  mt-14  ">

                        <div class="flex-1  mx-4 ">
                            <div class="flex flex-col ">
                                <img :src="data.recipe.Imagepath" alt="">
                            </div>

                            <!-- <div class=" mt-2 flex flex-row justify-between space-x-4  ">
                                <div class="flex flex-col w-full  ">
                                    <div class=" font-medium text-lg text-gray-600 dark:text-white">Nutrition Facts
                                    </div>
                                    <label class=" text-base flex-wrap   border-2 rounded-lg border-gray-300 p-4 text-gray-400 
                                                                    dark:text-white dark:bg-gray-700">Nutrition
                                        Facts<br>
                                        Serving Size: 1 Serving<br>
                                        Amount Per Serving: 840Calories<br>
                                        <br>
                                        <hr><br>
                                        Total Fat <br>
                                        Saturated Fat <br>
                                        Trans Fat <br>
                                        Cholesterol <br>
                                        Sodium <br>
                                        Total Carbohydrates <br>
                                        Dietary Fiber <br>
                                        Sugars <br>
                                        Protein
                                    </label>
                                </div>
                            </div> -->
                        </div>
                        <div class="flex-1  ">
                            <div class="flex flex-col space-y-6  mx-4">
                                <div class="   flex flex-row justify-between ">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">Recipe Name
                                        </div>
                                        <label
                                            class="  border-b-2 border-gray-300 text-gray-900 text-base flex-wrap  
                                                                   focus:ring-green focus:border-green  w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  ">{{
                                                                       data.recipe.Name }}</label>
                                    </div>
                                </div>
                                <div class=" mb-4  flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">Recipe Cuisine
                                        </div>
                                        <label
                                            class="  border-b-2 border-gray-300 text-gray-900 text-base flex-wrap  
                                                                   focus:ring-green focus:border-green  w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  ">{{
                                                                       data.recipe.Cuisine }}</label>
                                    </div>
                                </div>
                                <div class=" mb-4  flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">Recipe Diet
                                        </div>
                                        <label
                                            class="  border-b-2 border-gray-300 text-gray-900 text-base flex-wrap  
                                                                   focus:ring-green focus:border-green  w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  ">{{
                                                                       data.recipe.Diet }}</label>
                                    </div>
                                </div>
                                <div class=" mb-4  flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">Description
                                        </div>
                                        <label
                                            class="  border-b-2 border-gray-300 text-gray-900 text-base flex-wrap  
                                                                   focus:ring-green focus:border-green  w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  ">{{
                                                                       data.recipe.Description }}</label>

                                    </div>
                                </div>
                                <div class=" mb-4  flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">Ingredients
                                        </div>
                                        <label
                                            class="  border-b-2 border-gray-300 text-gray-900 text-base flex-wrap  
                                                                   focus:ring-green focus:border-green  w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  ">{{
                                                                       data.recipe.Ingredients }}</label>

                                    </div>
                                </div>
                                <div class=" mb-4  flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">
                                            Instructions(steps)
                                        </div>
                                        <label
                                            class="  border-b-2 border-gray-300 text-gray-900 text-base flex-wrap  
                                                                   focus:ring-green focus:border-green  w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  ">{{
                                                                       data.recipe.Instructions }}</label>

                                    </div>
                                </div>

                                <div class=" mb-12  flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  text-gray-600 dark:text-white">
                                        <div class=" font-medium text-lg ">Prep. Time
                                            <p class="font-thin text-sm mb-2">How long does it take to prepare this recipe?
                                            </p>
                                        </div>
                                        <div class="flex justify-between ">
                                            <div class="flex-1 mr-4 ">
                                                <div class="relative ">
                                                    <div class="absolute right-0 top-4">
                                                        Hours

                                                    </div>
                                                    <label
                                                        class=" absolute border-b-2 border-gray-300 text-gray-900 text-base flex-wrap  
                                                                   focus:ring-green focus:border-green  w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  ">{{
                                                                       data.recipe.PrepTimeHours }}</label>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div class="relative ">
                                                    <div class="absolute right-0 top-4">
                                                        Minutes

                                                    </div>
                                                    <label
                                                        class="absolute  border-b-2 border-gray-300 text-gray-900 text-base flex-wrap  
                                                                   focus:ring-green focus:border-green  w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  ">{{
                                                                       data.recipe.PrepTimeMinutes }}</label>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class=" mb-4   flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  text-gray-600 dark:text-white">
                                        <div class=" font-medium text-lg mt-10">Cook Time
                                            <p class="font-thin text-sm ">How long does it take to cook this recipe?
                                            </p>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex-1 mr-4">
                                                <div class="relative ">
                                                    <div class="absolute right-0 top-4">
                                                        Hours

                                                    </div>
                                                    <label
                                                        class="absolute  border-b-2 border-gray-300 text-gray-900 text-base flex-wrap  
                                                                   focus:ring-green focus:border-green  w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  ">{{
                                                                       data.recipe.CookTimeHours }}</label>
                                                </div>
                                            </div>
                                            <div class="flex-1 mb-8">
                                                <div class="relative ">
                                                    <div class="absolute right-0 top-4">
                                                        Minutes

                                                    </div>
                                                    <label
                                                        class=" absolute  border-b-2 border-gray-300 text-gray-900 text-base flex-wrap  
                                                                   focus:ring-green focus:border-green  w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  ">{{
                                                                       data.recipe.CookTimeMinutes }}</label>

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
    </div>
    <Footer />
</template>
