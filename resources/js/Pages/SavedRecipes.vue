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
">
        <div>
            <div class=" flex flex-col w-full ">
                <div class="container mx-auto px-4 w-full h-full ">
                    <div class="h-[450px]">
                        <div class="flex flex-row justify-between">
                            <div
                                class="font-bold text-transparent lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                                Saved Recipes</div>
                            <div class="flex flex-row w-auto  ">
                            </div>
                        </div>
                        <!-- <div class="flex flex-col items-center justify-center">
                            <img src="assets/images/image-107.png" alt="">

                            <div class="flex flex-col items-center justify-center">
                                <h2 class="font-bold">No items Here</h2>
                                <p>On adding your created recipes will be saved here.</p>
                                <button
                                    class="bg-gradient-to-r from-lemon to-green rounded-full p-2 text-gray-600 dark:text-white shadow-md hover:shadow-xl">
                                    Add Recipes Here
                                </button>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>
