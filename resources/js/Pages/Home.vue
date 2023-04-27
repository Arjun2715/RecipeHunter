<script scope>
import mainCarousel from "../Layouts/components/MainCard.vue";
import CardHorizontal from "../Layouts/components/cardHorizontal.vue";
import SectionTitle from "../Layouts/components/SectionTitle.vue";
import mostViewed from "../Layouts/components/MostViewed.vue";
import recentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
import recentlyUpdatedCarousel from "../Layouts/components/RecentlyUpdatedCarousel.vue";
import Footer from "../Layouts/components/Footer.vue";
import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

export default {
    props: {
        data: Object,
    },
    components: {
        RecipeHunterLayout,
        mainCarousel,
        Footer,
        mostViewed,
        recentlyUpdated,
        recentlyUpdatedCarousel,
        Carousel,
        Slide,
        Pagination,
        Navigation,
        CardHorizontal,
        SectionTitle,
    },
    data() {
        return {
            items: [
                {
                    title: 'Tacos',
                    description: 'Tacos are crunchy, messy and great fun to eat, so it’s no wonder they’re a big hit with the kids. They’re also easy to make – more of an assembly job than a recipe. ',
                    link: 'https://example.com/item1',
                    image1: 'assets/images/image-101.png',
                    image2: 'assets/images/taco.png',
                    tags: ['Beef', 'Mexican']
                },
                {
                    title: 'Hamburger',
                    description: 'Learn how to make succulent beef burgers with just four ingredients. An easy recipe for perfect homemade patties with beef mince.',
                    link: 'https://example.com/item1',
                    image1: 'assets/images/image-102.png',
                    image2: 'assets/images/mostviewed/image-3.png',
                    tags: ['German', 'Beef', 'Bread']
                    
                },
                {
                    title: 'Pappardelle',
                    description: 'This easy pasta recipe uses minced lamb meat, onions, tomato, lots of Parmesan and the warmth of nutmeg.',
                    link: 'https://example.com/item1',
                    image1: 'assets/images/image-103.png',
                    image2: 'assets/images/pasta-3.jpg',
                    tags: ['Pasta', 'Italian']

                },
                {
                    title: 'Soup',
                    description: 'Kyselo is a hearty soup made with a sourdough starter. Sourdough, or fermented flour, thickens the soup and adds a slightly sour taste.',
                    link: 'https://example.com/item1',
                    image1: 'assets/images/image-104.png',
                    image2: 'assets/images/soup-1.jpg',
                    tags: ['Bread', 'Eggs']

                },
            ],

        }
    },
    
}

</script>
<template>
    <RecipeHunterLayout />
    <div class="flex flex-col">
        <section class=" flex flex-col w-full  ">
            <div class="container mx-auto px-4  mt-10 ">
                <!-- <mainCarousel /> -->
                <carousel :items-to-show="1" :pauseAutoplayOnHover="true" :wrap-around="true" :autoplay="5000" :transition="1200" class="  rounded-[30px] ">
                    <Slide v-for="(item, index) in items" :key="index" class="relative ">
                        <img class="object-contain w-full h-full" :src="item.image1" alt="{{ item.title  }}" />
                        <div class=" absolute bottom-0 w-full ">
                            <div class="flex flex-col  ">
                                <div
                                    class="flex flex-row lg:justify-between md:justify-end px-8 pt-20 pb-6 bg-gradient-to-t from-slate-900 to-transparent">
                                    <h1 class="lg:hidden  md:hidden flex justify-start text-white  text-4xl font-semibold ">
                                        {{ item.title }}</h1>

                                    <div class="hidden flex-row lg:flex">
                                        <div class="ml-6">
                                            <img class="rounded-lg mb-4 " :src="item.image2" alt=""
                                                style="width: 200px; height: 280px; ">
                                        </div>
                                        <div class="flex-col justify-start text-white px-4">
                                            <div class="flex justify-start flex-row ">
                                            <p class="mr-3" v-for="tag in item.tags">{{ tag }}</p>
                                            </div>
                                            <h1 class="flex justify-start md:text-2xl lg:text-6xl font-semibold ">{{ item.title }}</h1>
                                            
                                            <div class="flex flex-row justify-start ">
                                                <a class="flex flex-row mr-5" href="#">
                                                    <svg width="28px" height="28px" viewBox="0 0 26 26" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.75 5H8.25C7.55964 5 7 5.58763 7 6.3125V19L12 15.5L17 19V6.3125C17 5.58763 16.4404 5 15.75 5Z"
                                                            stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round">
                                                        </path>
                                                    </svg>
                                                    Save
                                                </a>
                                                <a class="flex flex-row pb-2" href="#">
                                                    <svg fill="#ffffff" width="28px" height="28px" viewBox="-8 -8 46 46"
                                                        version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.999 3.567c0.98 0 2.753 0.469 5.628 3.301l1.425 1.403 1.404-1.426c1.996-2.028 4.12-3.288 5.543-3.288 1.919 0 3.432 0.656 4.907 2.128 1.39 1.386 2.156 3.23 2.156 5.191 0.001 1.962-0.764 3.807-2.169 5.209-0.114 0.116-6.156 6.634-11.218 12.097-0.238 0.227-0.511 0.26-0.656 0.26-0.143 0-0.412-0.032-0.65-0.253-1.233-1.372-10.174-11.313-11.213-12.351-1.391-1.388-2.157-3.233-2.157-5.194s0.766-3.804 2.158-5.192c1.353-1.352 2.937-1.885 4.842-1.885zM8.999 1.567c-2.392 0-4.5 0.715-6.255 2.469-3.659 3.649-3.659 9.566 0 13.217 1.045 1.045 11.183 12.323 11.183 12.323 0.578 0.578 1.336 0.865 2.093 0.865s1.512-0.287 2.091-0.865c0 0 11.090-11.97 11.208-12.089 3.657-3.652 3.657-9.57 0-13.219-1.816-1.813-3.845-2.712-6.319-2.712-2.364 0-5 1.885-6.969 3.885-2.031-2-4.585-3.874-7.031-3.874v0z">
                                                        </path>
                                                    </svg>
                                                    <label class="align-bottom">Favourite</label>
                                                </a>
                                            </div>
                                            <div class="w-auto max-w-screen-lg text-left">
                                                {{ item.description }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden md:flex flex-row justify-end">
                                        <div class=" p-2 flex flex-col justify-end text-white">
                                            <Pagination
                                                class="bg-gradient-to-r from-lemon to-green rounded-lg w-auto flex flex-row justify-between " />
                                        </div>
                                        <div class=" p-2 flex flex-col justify-end">
                                            <Link class="align-bottom" href="#">
                                            <div
                                                class=" font-bold text-transparent text-xl lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                                                Cook </div>
                                            <div
                                                class="font-bold text-transparent text-xl lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-t from-gray-400 to-gray-600">
                                                Now</div>
                                            </link>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </Slide>
                    <template #addons>
                        <navigation class="h-20 dark:bg-gray-200 rounded-full" />
                    </template>
                </carousel>
                <mostViewed />
                
                <div class="flex flex-col   lg:mt-[50px] md:mt-[30px] mt-[20px]">
                    <SectionTitle title="Reciently Updated" />
                    <div v-for="rece in data.recentlyUpdated" 
                    class="dark:text-white mt-4 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 flex-wrap mb-24">
                        <CardHorizontal :recipedata="rece"/>
                    </div>
                </div>

                <!-- <recentlyUpdatedCarousel /> -->

            </div>
            
        </section>

    </div>


    <Footer />
</template>
<style>

</style>
