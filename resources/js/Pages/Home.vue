<script scope>
import mainCarousel from "../Layouts/components/MainCard.vue";
import footer from "../Layouts/components/Footer.vue";
import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
export default {
    components: {
        RecipeHunterLayout,
        mainCarousel,
        footer,
    }
}
</script>
<template>
    <div class="flex flex-col">
        <div>
            <RecipeHunterLayout />
        </div>
        <div>
            <section class=" w-full h-[2000px]">
                <div class="container mx-auto px-4 w-full h-full mt-10">
                    <mainCarousel />
                </div>
            </section>
        </div>
        <div>
           <footer />
         </div>

</div></template>

