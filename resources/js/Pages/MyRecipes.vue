<script scope>
import Footer from "../Layouts/components/Footer.vue";
import Header from "../Layouts/components/Header.vue";
import RecentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
export default {
    components: {
        Header,
        Footer,
        RecentlyUpdated,
    },
    //example test data
    
}
</script>
<template>
    <Header />
    <div class="flex flex-col lg:mt-20
 dark:text-white">
        <div>
            <div class=" flex flex-col w-full ">
                <div class="container mx-auto px-4 w-full h-full ">
                    <div class="h-auto">
                        <div class="flex flex-row justify-between">
                            <div
                                class="font-bold text-transparent lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                                Add new Recipe</div>
                            <div class="flex flex-row w-auto  ">
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <img src="assets/images/image-107.png" alt="">

                            <div class="flex flex-col items-center justify-center">
                                <h2 class="font-bold">Add New Recipes</h2>
                                <p>On adding your created recipes will be saved in Saved Recipes.</p>
                                <Link href="/newrecipe"
                                    class="btn border-none mt-4 bg-gradient-to-r from-lemon to-green rounded-full p-2 text-gray-600 dark:text-white shadow-md hover:shadow-xl">
                                    Add Recipes 
                            </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>
