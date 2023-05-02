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
    props: {
        data: Object,
    },

    //example test data

}
</script>
<template>
    <Header />
    <div class="flex flex-col lg:mt-20">

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
                        <div class="h-auto ">
                        <!--search info cards here -->
                        <div class="flex flex-row justify-center  " v-if="data.recipes.data == null">
                            <div class="text-center items-center p-20" >
                                <div class="flex flex-row justify-center ">
                                    <img class="w-auto h-20" src="assets/images/search.png" alt="">

                                </div>
                                <label class="font-bold text-xl text-gray-800 dark:text-white">No Result's Found</label>
                                <p class="text-gray-700 dark:text-white">We're sorry what you were looking for. Please <br> try another way</p>
                            </div>


                        </div>
                        <div v-else
                            class="mb-20 py-2 grid lg:grid-cols-3 lg:items-center md:grid md:grid-cols-2 md:items-center grid-cols-1 items-center w-full h-full"
                        >
                            <div
                                v-for="item in data.recipes.data"
                                class="flex-1 m-2 dark:text-white"
                            >
                                <Link
                                    href="/viewrecipe"
                                    meathod="get"
                                    as="button"
                                    type="button"
                                    :data="{ recipeId: item.id }"
                                >
                                    <div
                                        class="w-full h-full rounded-[18px] shadow-md hover:shadow-xl"
                                    >
                                        <div
                                            class="card card-side bg-white dark:bg-gray-600 h-52 overflow-hidden"
                                        >
                                            <img
                                                class="object-cover"
                                                :src="item.image"
                                                alt="Recipe Image here :("
                                                style="
                                                    width: 200px;
                                                "

                                            />
                                            <div
                                                class="card-body p-2 overflow-visible"
                                            >
                                                <h2
                                                    class="card-title text-gray-800 dark:text-white text-lg text-left"
                                                >
                                                    {{ item.title }}
                                                </h2>
                                                <label
                                                    class="text-gray-800 dark:text-white h-fit text-sm text-left"
                                                >
                                                    {{ item.description }}
                                                </label>

                                                <div
                                                    class="card-actions justify-start"
                                                >
                                                    <div class="flex flex-row">
                                                        <div
                                                            v-for="tag in item.tags"
                                                            class="flex flex-wrap justify-around"
                                                        >
                                                            <div
                                                                class="whitespace-nowrap mr-2"
                                                            >
                                                                <label
                                                                    class="relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] before:bottom-0 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer before:hover:scale-x-100 before:scale-x-0 before:origin-top-left before:transition before:ease-in-out before:duration-300"
                                                                >
                                                                    {{
                                                                        capitalizeFirstLetter(
                                                                            tag
                                                                        )
                                                                    }}</label
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </Link>
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
