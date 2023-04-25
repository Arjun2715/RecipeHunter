<template>
    <div class="flex flex-col lg:mt-[50px] md:mt-[30px] mt-[20px]">
        <div class="flex flex-row justify-between">
            <SectionTitle title="Most Viewed" />
            <div class="hidden md:flex flex-row w-auto  space-x-5 ">
                <div @click="shuffleItems" class="text-gray dark:text-white p-0
                                    relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] 
                                    before:bottom-4 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer
                                    before:hover:scale-x-100 before:scale-x-0 before:origin-top-left
                                    before:transition before:ease-in-out before:duration-300 ">Day</div>
                <div @click="shuffleItems" class="text-gray dark:text-white p-0
                                    relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] 
                                    before:bottom-4 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer
                                    before:hover:scale-x-100 before:scale-x-0 before:origin-top-left
                                    before:transition before:ease-in-out before:duration-300">Week
                </div>
                <div @click="shuffleItems" class="
                text-gray dark:text-white p-0
                                    relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] 
                                    before:bottom-4 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer
                                    before:hover:scale-x-100 before:scale-x-0 before:origin-top-left
                                    before:transition before:ease-in-out before:duration-300">
                    Month</div>
            </div>
        </div>
        <div class="overflow-x-auto scrollbar  ">
            <div class="flex space-x-4  py-4">
                <div v-for="(item, index) in items" :key="index" class="carousel-item">
                    <div class="card bg-white dark:bg-gray-600">
                        <div id="cards" class="container">
                            <img :src="item.image1" class="rounded-t-2xl w-[170px] h-[250px]" />
                            <div id="top_id" class="bg-green-60 dark:bg-gray-600  w-l h-l absolute top-2 right-2 rounded-full py-3 px-3 
                            transition duration-300 transform transition-height hover:h-14 overflow-hidden ease-out">
                                <h2 class="text-gray-900 dark:text-white justify-center">{{ index + 1 }}</h2>
                            </div>

                        </div>
                        <div class="bg-green dark:bg-gray-600 rounded-b-2xl py-2">
                            <h2 class="card-title  text-gray-800 dark:text-white justify-center ">{{ item.title }}</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>
<script scope>
import SectionTitle from "../components/SectionTitle.vue";


export default {

    components: {
        SectionTitle,
    },
    data() {
        return {
            items: [

                {
                    id: 4,
                    title: 'Pasta',
                    link: '#',
                    image1: 'assets/images/recentlyupdated/image-24.png',
                },
                {
                    id: 5,
                    title: 'title5',
                    link: '#',
                    image1: 'assets/images/recentlyupdated/image-25.png',
                },
                {
                    id: 6,
                    title: 'title6',
                    link: '#',
                    image1: 'assets/images/recentlyupdated/image-26.png',
                },
                {
                    id: 7,
                    title: 'title7',
                    link: '#',
                    image1: 'assets/images/recentlyupdated/image-27.png',
                },
                {
                    id: 8,
                    title: 'title8',
                    link: '#',
                    image1: 'assets/images/recentlyupdated/image-28.png',
                },
                {
                    id: 9,
                    title: 'title9',
                    link: '#',
                    image1: 'assets/images/recentlyupdated/image-29.png',
                },
                {
                    id: 1,
                    title: 'title1',
                    link: '#',
                    image1: 'assets/images/recentlyupdated/image-21.png',
                },
                {
                    id: 2,
                    title: 'title2',
                    link: '#',
                    image1: 'assets/images/recentlyupdated/image-22.png',
                },
                {
                    id: 3,
                    title: 'title3',
                    link: '#',
                    image1: 'assets/images/recentlyupdated/image-23.png',
                },

            ],
        }
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
        }
    }
}
</script>