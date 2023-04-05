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
    data() {
        return {
            items: [
                {
                    title: 'Item 1',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item1',
                    image: 'assets/images/mostviewed/image-14.png'
                },
                {
                    title: 'Item 2',
                    description: 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    link: 'https://example.com/item2',
                    image: 'assets/images/mostviewed/image-13.png'
                },
                {
                    title: 'Item 3',
                    description: 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                    link: 'https://example.com/item3',
                    image: 'assets/images/mostviewed/image-12.png'
                },
                {
                    title: 'Item 1',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item1',
                    image: 'assets/images/mostviewed/image-14.png'
                },
                {
                    title: 'Item 2',
                    description: 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    link: 'https://example.com/item2',
                    image: 'assets/images/mostviewed/image-13.png'
                },
                {
                    title: 'Item 3',
                    description: 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                    link: 'https://example.com/item3',
                    image: 'assets/images/mostviewed/image-12.png'
                }
            ]
        }
    }
}
</script>
<template>
    <RecipeHunterLayout />
    <div class="flex flex-col lg:mt-8">
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
