<script>
import Footer from "../Layouts/components/Footer.vue";
import Header from "../Layouts/components/Header.vue";
import RecentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
import MainCarousel from "../Layouts/components/MainCard.vue";

export default {
    props: {
        data: Object,
    },
    components: {
        Header,
        Footer,
        RecentlyUpdated,
        MainCarousel,
    },
    methods: {
        displayData() {
            console.log(this.data.recipe.data.nutrition_facts);
        },
    },
    mounted() {
        this.displayData()
    },
    nutritionList() {
    return this.data.recipe.data.nutrition_facts.split(' ');
  }

}
</script>

<template>
<Header />
<div class="flex flex-col mt-20">
    <h1 class="dark:text-white">{{ data.recipe.data }}</h1>

    <div class=" flex flex-col w-full ">
        <div class="container mx-auto px-4 w-full h-full ">
            <div class="h-auto">
                <div class="flex flex-row justify-between">
                    <div class="font-bold text-transparent text-xl lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                        Recipe Details</div>
                </div>
                <div class="lg:flex flex-row  mt-14 dark:text-white ">

                    <div class="flex-1  mx-4 ">
                        <div class="flex flex-col ">
                            <img class="object-cover w-full h-auto" :src="data.recipe.data.image" alt="">
                            <label for="">
                                {{ data.recipe.data.nutrition_facts }}
                            </label>
                        </div>
                    </div>
                    <div class="flex-1  ">
                        <div class="flex flex-col space-y-4  mx-4">
                            <div class="   flex flex-row justify-between ">
                                <div class="flex flex-col w-full  ">
                                    <div class=" text-4xl font-extrabold text-gray-600 dark:text-white">{{
                                            this.data.recipe.data.title }}
                                    </div>

                                </div>

                            </div>
                            <div class="rating rating-md align-bottom">
                                <input type="radio" name="rating-7" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-7" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-7" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-7" class="mask mask-star-2 bg-orange-400" checked />
                                <input type="radio" name="rating-7" class="mask mask-star-2 bg-orange-400" />
                            </div>
                            <label class="text-gray-700 dark:text-white">{{ data.recipe.data.description }} </label>
                            <div class=" font-medium text-2xl text-gray-600 dark:text-white">Recipe Cuisine:
                                <label v-for="(item, index) in this.data.recipe.data.cuisines" :key="index">
                                    <label class="text-gray-700 text-base dark:text-white p-2">{{ item.name }}</label>
                                </label>
                            </div>
                            <div class=" mb-4  flex flex-row justify-between space-x-4">
                                <div class="flex flex-col w-full  ">
                                    <div class=" font-medium text-2xl text-gray-600 dark:text-white mb-2 ">Ingredients
                                    </div>
                                    <hr style="border: none;height: 1px;background-color: #00a15e;">

                                    <ul  class="text-gray-700 text-lg dark:text-white " v-for="(item, index) in data.recipe.data.ingredients" :key="index">
                                        <li>{{ item.name }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=" mb-4  flex flex-row justify-between space-x-4">
                                <div class="flex flex-col w-full   ">
                                    <div class=" font-medium text-2xl text-gray-600 dark:text-white mb-2">Instructions(steps)
                                        <hr style="border: none;height: 1px;background-color: #00a15e;">
                                    </div>
                                    <ul class="text-gray-700 dark:text-white pl-4" v-for="(item, index) in data.recipe.data.steps" :key="index">
                                        <div class="flex flex-row items-start-start mb-2"><label class=" mr-2 text-emerald-600 text-xl align-top">{{ index+1 }}.</label> <label for="">{{ item.description }}</label></div>
                                    </ul>
                                </div>
                            </div>
                            <div class=" mb-12  flex flex-row justify-between space-x-4">
                                <div class="flex flex-col w-full text-gray-600 dark:text-white">
                                    <label v-if="data.recipe.data.prep_time != -1" class="text-gray-700 text-base dark:text-white"><label class="font-medium text-2xl">Prep. Time:</label> {{ data.recipe.data.prep_time }}Minutes</label>
                                </div>
                                <div class="flex flex-col w-full text-gray-600 dark:text-white">
                                    <label v-if="data.recipe.data.cook_time != -1" class="text-gray-700 text-base dark:text-white"><label class="font-medium text-2xl">Cook Time:</label> {{ data.recipe.data.cook_time }}Minutes</label>
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

</style>
