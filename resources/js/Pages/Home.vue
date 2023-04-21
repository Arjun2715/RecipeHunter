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
                    image: 'assets/images/image-101.png'
                },
                {
                    title: 'Item 2',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item2',
                    image: 'assets/images/image-102.png'
                },
                {
                    title: 'Item 3',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item3',
                    image: 'assets/images/image-103.png'
                },
                {
                    title: 'Item 1',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item1',
                    image: 'assets/images/image-104.png'
                },
            ]
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
                <carousel :items-to-show="1" :wrap-around="true" :autoplay="2000" class=" h-[400px]">
                    <Slide v-for="(item, index) in items" :key="index" class="rounded-[30px]">
                            <img class="object-cover" :src="item.image" alt="{{ item.title  }}" />
                    </Slide>
                    <template #addons>
                        <navigation />
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

