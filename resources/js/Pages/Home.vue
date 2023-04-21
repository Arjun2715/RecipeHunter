<script scope>
import mainCarousel from "../Layouts/components/MainCard.vue";
import mostViewed from "../Layouts/components/MostViewed.vue";
import recentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
import recentlyUpdatedCarousel from "../Layouts/components/RecentlyUpdatedCarousel.vue";
import Footer from "../Layouts/components/Footer.vue";
import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'




// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})


export default {
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
    },
    data() {
        return {
            items: [
                {
                    title: 'Item 1',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item1',
                    image1: 'assets/images/image-101.png',
                    image2: 'assets/images/taco.png'
                },
                {
                    title: 'Item 1',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item1',
                    image1: 'assets/images/image-102.png',
                    image2: 'assets/images/recentlyupdated/image-21.png'
                },
                {
                    title: 'Item 1',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item1',
                    image1: 'assets/images/image-103.png',
                    image2: 'assets/images/recentlyupdated/image-22.png'
                },
                {
                    title: 'Item 1',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item1',
                    image1: 'assets/images/image-104.png',
                    image2: 'assets/images/recentlyupdated/image-23.png'
                },
            ],
        }
    }
}
</script>
<template>
    <RecipeHunterLayout />
    <div class="flex flex-col">
        <section class=" flex flex-col w-full  ">
            <div class="container mx-auto px-4  mt-10 ">
                <!-- <mainCarousel /> -->
                
                <carousel :items-to-show="1" :wrap-around="true" :autoplay="20000" class="  rounded-[30px] ">
                    <Slide v-for="(item, index) in items" :key="index" class="relative">
                        <img class="" :src="item.image1" alt="{{ item.title  }}"
                            style="width: 100%;height: 100%;object-fit: cover;" />
                        
                        <div class=" absolute bottom-4 left-8">
                            <div class="max-w-full">
                                <div class="flex flex-row justify-between w-full">
                                    <div class="flex flex-row">
                                        <div class="mx-5">
                                            <img class="rounded-lg" :src="item.image2" alt=""
                                                style="width: auto; height: 250px; ">
                                        </div>
                                        <div class="flex-col justify-start dark:text-white">
                                            <p class="flex justify-start">Tag1 Tag2 Tag3</p>
                                            <h1 class="flex justify-start   text-4xl font-semibold ">{{ item.title }}</h1>
                                            <br>
                                            <div class="flex flex-row justify-start">
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
                                                <a class="flex flex-row" href="#">
                                                    <svg fill="#ffffff" width="28px" height="28px" viewBox="-8 -8 46 46"
                                                        version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.999 3.567c0.98 0 2.753 0.469 5.628 3.301l1.425 1.403 1.404-1.426c1.996-2.028 4.12-3.288 5.543-3.288 1.919 0 3.432 0.656 4.907 2.128 1.39 1.386 2.156 3.23 2.156 5.191 0.001 1.962-0.764 3.807-2.169 5.209-0.114 0.116-6.156 6.634-11.218 12.097-0.238 0.227-0.511 0.26-0.656 0.26-0.143 0-0.412-0.032-0.65-0.253-1.233-1.372-10.174-11.313-11.213-12.351-1.391-1.388-2.157-3.233-2.157-5.194s0.766-3.804 2.158-5.192c1.353-1.352 2.937-1.885 4.842-1.885zM8.999 1.567c-2.392 0-4.5 0.715-6.255 2.469-3.659 3.649-3.659 9.566 0 13.217 1.045 1.045 11.183 12.323 11.183 12.323 0.578 0.578 1.336 0.865 2.093 0.865s1.512-0.287 2.091-0.865c0 0 11.090-11.97 11.208-12.089 3.657-3.652 3.657-9.57 0-13.219-1.816-1.813-3.845-2.712-6.319-2.712-2.364 0-5 1.885-6.969 3.885-2.031-2-4.585-3.874-7.031-3.874v0z">
                                                        </path>
                                                    </svg>
                                                    <label class="align-middle">Favourite</label>
                                                </a>
                                            </div>
                                            <br>
                                            <div class="w-auto max-w-screen-lg">
                                                {{ item.description }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="absolute bottom-8 right-40">
                        <Pagination/>
                        </div>
                        <div class="absolute bottom-4 right-8"><Link href="#">
                            <div
                                class=" font-bold text-transparent text-xl lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                                Cook </div>
                            <div
                                class="font-bold text-transparent text-xl lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-gray-600 to-gray-600">
                                Now</div>
                        </link>
                            
                        </div>
                    </Slide>
                    <template #addons>
                        <navigation />
                        <!-- <Pagination/> -->
                    </template>
                </carousel>
                <mostViewed />
                <recentlyUpdated />
                <recentlyUpdatedCarousel />
            </div>
        </section>
    </div>
    <Footer />
</template>







