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
    //example test data

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
                                Add New Recipes</div>
                            <div class="flex flex-row w-auto  ">
                            </div>
                        </div>
                        <div class="lg:flex flex-row  mt-14  ">
                            <div class="flex-1  ">
                                <div class="flex flex-col">
                                    <img class="h-auto max-w-full" src="assets/images/image-101.png"
                                        alt="image description">

                                </div>
                                <div class="flex flex-col justify-center w-auto">
                                    <button
                                        class="btn border-none bg-gradient-to-r from-lemon to-green rounded-none dark:text-white">add
                                        more images</button>

                                </div>
                                <div class=" mt-8 flex flex-row justify-between space-x-4  ">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">Nutrition Facts
                                        </div>
                                        <label class=" text-base   border-2 rounded-lg border-gray-600 p-4 text-gray-900 
                                                        dark:text-white dark:bg-gray-700">Nutrition Facts<br>
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
                                </div>
                            </div>
                            <div class="flex-1 mx-10">
                                <div class="flex flex-col space-y-6">
                                    <div class=" mb-4  flex flex-row justify-between ">
                                        <div class="flex flex-col w-full  ">
                                            <div class=" font-medium text-lg text-gray-600 dark:text-white">Recipe Name
                                            </div>
                                            <input type="text"
                                                class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                       focus:ring-green focus:border-green rounded-xl w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                       dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                placeholder="Your Recipe name here">
                                        </div>
                                    </div>
                                    <div class=" mb-4  flex flex-row justify-between space-x-4">
                                        <div class="flex flex-col w-full  ">
                                            <div class=" font-medium text-lg text-gray-600 dark:text-white">Description
                                            </div>
                                            <textarea
                                                class="block h-30 border-2 border-gray-300 text-gray-900 text-sm  
                                                       focus:ring-green focus:border-green rounded-xl w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                       dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                placeholder="Your Recipe description here"></textarea>

                                        </div>
                                    </div>
                                    <div class=" mb-4  flex flex-row justify-between space-x-4">
                                        <div class="flex flex-col w-full  ">
                                            <div class=" font-medium text-lg text-gray-600 dark:text-white">Ingredients
                                            </div>
                                            <textarea
                                                class="block h-30  border-2 border-gray-300 text-gray-900 text-sm  
                                                       focus:ring-green focus:border-green rounded-xl w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                       dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                placeholder="Your Recipe ingredients here"></textarea>

                                        </div>
                                    </div>
                                    <div class=" mb-4  flex flex-row justify-between space-x-4">
                                        <div class="flex flex-col w-full  ">
                                            <div class=" font-medium text-lg text-gray-600 dark:text-white">
                                                Instructions(steps)
                                            </div>
                                            <textarea
                                                class="block h-30  border-2 border-gray-300 text-gray-900 text-sm  
                                                       focus:ring-green focus:border-green rounded-xl w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                       dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                placeholder="Your Recipe instructions here"></textarea>

                                    </div>
                                </div>
                                    <div class=" mb-4  flex flex-row justify-between space-x-4">
                                        <div class="flex flex-col w-full  ">
                                            <div class=" font-medium text-lg text-gray-600 dark:text-white">Recipe Name
                                            </div>
                                            <input type="text"
                                                class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                       focus:ring-green focus:border-green rounded-xl w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                       dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                placeholder="Your Recipe name here">
                                        </div>
                                    </div>
                                    <!-- 
                                            cojemos algo como este web 
                                            https://www.verywellfit.com/recipe-nutrition-analyzer-4157076 -->

                                    <div class=" mb-4  flex flex-row justify-between space-x-4">
                                        <div class="flex flex-col w-full  text-gray-600 dark:text-white">
                                            <div class=" font-medium text-lg ">Prep. Time
                                                <p class="font-thin text-sm mb-2">How long does it take to prepare this
                                                    recipe?</p>
                                            </div>
                                            <div class="flex  justify-between">
                                                <div class="relative mr-4">
                                                    <div class="absolute left-3 top-2.5">
                                                        Hours

                                                    </div>
                                                    <input type="number"
                                                        class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                       focus:ring-green focus:border-green rounded-xl w-full pl-16  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                       dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                        placeholder="0">
                                                </div>
                                                <div class="relative">
                                                    <div class="absolute left-3 top-2.5">
                                                        Minutes

                                                    </div>
                                                    <input type="number"
                                                        class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                       focus:ring-green focus:border-green rounded-xl w-full pl-20  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                       dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                        placeholder="0">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" mb-4  flex flex-row justify-between space-x-4">
                                        <div class="flex flex-col w-full  text-gray-600 dark:text-white">
                                            <div class=" font-medium text-lg ">Cook Time
                                                <p class="font-thin text-sm mb-2">How long does it take to cook this recipe?
                                                </p>
                                            </div>
                                            <div class="flex justify-between">
                                                <div class="relative mr-4">
                                                    <div class="absolute left-3 top-2.5">
                                                        Hours

                                                    </div>
                                                    <input type="number"
                                                        class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                       focus:ring-green focus:border-green rounded-xl w-full pl-16  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                       dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                        placeholder="0">
                                                </div>
                                                <div class="relative ">
                                                    <div class="absolute left-3 top-2.5">
                                                        Minutes

                                                    </div>
                                                    <input type="number"
                                                        class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                       focus:ring-green focus:border-green rounded-xl w-full pl-20  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                       dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                        placeholder="0">

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
<Footer /></template>
