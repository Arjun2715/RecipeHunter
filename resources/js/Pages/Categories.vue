<script scope>
import Footer from "../Layouts/components/Footer.vue";
import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
import RecentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
import {InertiaProgress} from '@inertiajs/progress'

export default {
    props: {
        data: Object,
    },
    components: {
        RecipeHunterLayout,
        Footer,
        RecentlyUpdated,
    },
    computed: {
        capitalizeFirstLetter() {
            return function (string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }
        }
    }
}
InertiaProgress.init();

</script>
<template>
    <RecipeHunterLayout />
    <div class="flex flex-col lg:mt-8">
        <div>
            <div class=" flex flex-col w-full ">
                <div class="container mx-auto px-4  ">
                    <div class="h-auto">
                        <!--search info cards here -->
                        <div class=" grid space-x-4 space-y-4 grid-cols-2  md:grid-cols-4  lg:grid-cols-6">
                            <div v-for="item in data.categories"
                                class="flex-1 ml-4 mt-4 card  h-56 overflow-hidden shadow-md hover:shadow-xl">
                                <img class="h-48 w-full object-cover" :src="item.image" alt="Recipe Image here :("
                                    style=""/>
                                    <div class="bg-green dark:bg-gray-600 rounded-b-2xl  h-8">
                                    <h2 class="card-title text-gray-800 dark:text-white justify-center ">{{ capitalizeFirstLetter(item.name) }}</h2>
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
