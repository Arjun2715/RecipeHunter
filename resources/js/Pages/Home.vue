<script scope>
import mainCarousel from "../Layouts/components/MainCard.vue";
import mostViewed from "../Layouts/components/MostViewed.vue";
import recentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
import recentlyUpdatedCarousel from "../Layouts/components/RecentlyUpdatedCarousel.vue";
import Footer from "../Layouts/components/Footer.vue";
import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'

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
    }
}
</script>
<template>
    <RecipeHunterLayout />
    <div class="flex flex-col">
            
        <div>
            <section class=" flex flex-col w-full ">
                <div class="container mx-auto px-4 w-full h-full mt-10 ">
                    <mainCarousel />
                    <mostViewed />
                    <recentlyUpdated />
                    <recentlyUpdatedCarousel />
                </div>

            </section>
        </div>
    </div>
    <Footer />  
</template>

