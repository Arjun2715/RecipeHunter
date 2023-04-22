<script>
import SectionTitle from "../components/SectionTitle.vue";

export default {
    components: {
        SectionTitle,
    },
    data() {
        return {
            items: [
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
                {
                    id: 4,
                    title: 'title4',
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

            ],
        }
    }
}
</script>
<template>
    <div class="flex flex-col lg:mt-[50px] md:mt-[30px] mt-[20px]">
        <div class="flex flex-row justify-between">
            <SectionTitle title="Most Viewed" />

            <div class="hidden md:flex flex-row w-auto  ">
                <div class="lg:text-xl pr-4  cursor-pointer text-gray-800 dark:text-white ">Day</div>
                <div class="lg:text-xl text-gray-500 hover:underline cursor-pointer  dark:text-gray-400 ">Week
                </div>
                <div class="lg:text-xl pl-4 text-gray-500 hover:underline cursor-pointer  dark:text-gray-400 ">
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
                                <h2 class="text-gray-900 dark:text-white justify-center">{{ item.id }}</h2>
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
<style></style>