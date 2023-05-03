<template>
    <div class="flex flex-col lg:mt-[50px] md:mt-[30px] mt-[20px]">
        <div class="flex flex-row justify-between">
            <SectionTitle title="Most Viewed" />
            <div class="hidden md:flex flex-row w-auto space-x-5">
                <div
                    @click="selectedType = 'this.data.day.data'"
                    class="text-gray dark:text-white p-0 relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] before:bottom-4 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer before:hover:scale-x-100 before:scale-x-0 before:origin-top-left before:transition before:ease-in-out before:duration-300"
                >
                    Day
                </div>
                <div
                    @click="selectedType = 'this.data.week.data'"
                    class="text-gray dark:text-white p-0 relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] before:bottom-4 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer before:hover:scale-x-100 before:scale-x-0 before:origin-top-left before:transition before:ease-in-out before:duration-300"
                >
                    Week
                </div>
                <div
                    @click="selectedType = 'this.data.month.data'"
                    class="text-gray dark:text-white p-0 relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] before:bottom-4 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer before:hover:scale-x-100 before:scale-x-0 before:origin-top-left before:transition before:ease-in-out before:duration-300"
                >
                    Month
                </div>
            </div>
        </div>
        <div class="overflow-x-auto scrollbar ">
            <div class="flex space-x-4 py-4">
                <div
                    v-for="(item, index) in this.data.month.data"
                    :key="index"
                    class="carousel-item justify-start"
                >
                    <Link
                        href="/viewrecipe"
                        meathod="get"
                        as="button"
                        type="button"
                        :data="{ recipeId: item.id }"
                    >
                        
                        <div v-if="item.title.length < 34" class="card bg-white dark:bg-gray-600">
                            <div id="cards" class="container">
                                <img
                                    :src="item.image"
                                    class="rounded-t-2xl object-cover w-60 h-72"
                                />
                            </div>
                            <div 
                                class="bg-green dark:bg-gray-600 rounded-b-2xl py-2"
                            >
                                <h2
                                    class="text-gray-800 dark:text-white text-center"
                                >
                                    {{ item.title }}
                                </h2>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>
        </div>
    </div>
    <!-- <p>{{ this.data }}</p> -->
</template>
<script scope>
import SectionTitle from "../components/SectionTitle.vue";

export default {
    props: {
        data: {
            type: Array,
            required: true,
        },
        selectedType: "this.data.day.data",
    },
    components: {
        SectionTitle,
    },
    data() {
        return {
            items: [
                {
                    id: 4,
                    title: "Pasta",
                    link: "#",
                    image1: "assets/images/recentlyupdated/image-24.png",
                },
                {
                    id: 5,
                    title: "Hawaiian Salad",
                    link: "#",
                    image1: "assets/images/recentlyupdated/image-25.png",
                },
                {
                    id: 6,
                    title: "Chicken Salad",
                    link: "#",
                    image1: "assets/images/recentlyupdated/image-26.png",
                },
                {
                    id: 7,
                    title: "Nachos",
                    link: "#",
                    image1: "assets/images/recentlyupdated/image-27.png",
                },
                {
                    id: 8,
                    title: "Pasta Marinara",
                    link: "#",
                    image1: "assets/images/recentlyupdated/image-28.png",
                },
                {
                    id: 9,
                    title: " Salad",
                    link: "#",
                    image1: "assets/images/recentlyupdated/image-29.png",
                },
                {
                    id: 1,
                    title: "Cheese Toast",
                    link: "#",
                    image1: "assets/images/recentlyupdated/image-21.png",
                },
                {
                    id: 2,
                    title: "Garlic Salmon",
                    link: "#",
                    image1: "assets/images/recentlyupdated/image-22.png",
                },
                {
                    id: 3,
                    title: "Choco Shake",
                    link: "#",
                    image1: "assets/images/recentlyupdated/image-23.png",
                },
            ],
        };
    },
    methods: {
        shuffleItems() {
            // Shuffle the items array
            this.items = this.shuffle(this.items);
        },

        // Helper function to shuffle an array
        shuffle(array) {
            let currentIndex = array.length;
            let temporaryValue;
            let randomIndex;

            // While there remain elements to shuffle
            while (0 !== currentIndex) {
                // Pick a remaining element
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex -= 1;

                // And swap it with the current element
                temporaryValue = array[currentIndex];
                array[currentIndex] = array[randomIndex];
                array[randomIndex] = temporaryValue;
            }

            return array;
        },
    },
};
</script>
