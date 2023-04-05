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
                    <div class="h-auto">
                        <!--search info cards here -->
                        <div class="flex grid space-x-4 space-y-4 grid-cols-2  md:grid-cols-4 lg:hidden">
                            <div class="flex-1 ml-4 mt-4 card  h-auto shadow-md hover:shadow-xl">
                                <div class="container   ">
                                    <img src="assets/images/categories/cat-1.png" class="rounded-t-2xl w-full " />
                                </div>
                                <div class="bg-green dark:bg-gray-600 rounded-b-2xl py-2">
                                    <h2 class="card-title  text-gray-800 dark:text-white justify-center ">Lorem</h2>
                                </div>
                            </div>
                            <div class="flex-1 card  h-auto shadow-md hover:shadow-xl">
                                <div class="container ">
                                    <img src="assets/images/categories/cat-2.png" class="rounded-t-2xl w-full " />
                                </div>
                                <div class="bg-green dark:bg-gray-600 rounded-b-2xl py-2">
                                    <h2 class="card-title  text-gray-800 dark:text-white justify-center ">Lorem</h2>
                                </div>
                            </div>
                            <div class="flex-1 card  h-auto shadow-md hover:shadow-xl">
                                <div class="container ">
                                    <img src="assets/images/categories/cat-3.png" class="rounded-t-2xl w-full " />
                                </div>
                                <div class="bg-green dark:bg-gray-600 rounded-b-2xl py-2">
                                    <h2 class="card-title  text-gray-800 dark:text-white justify-center ">Lorem</h2>
                                </div>
                            </div>
                            <div class="flex-1 card  h-auto shadow-md hover:shadow-xl">
                                <div class="container ">
                                    <img src="assets/images/categories/cat-4.png" class="rounded-t-2xl w-full " />
                                </div>
                                <div class="bg-green dark:bg-gray-600 rounded-b-2xl py-2">
                                    <h2 class="card-title  text-gray-800 dark:text-white justify-center ">Lorem</h2>
                                </div>
                            </div>
                            <div class="flex-1 card  h-auto shadow-md hover:shadow-xl">
                                <div class="container ">
                                    <img src="assets/images/categories/cat-5.png" class="rounded-t-2xl w-full " />
                                </div>
                                <div class="bg-green dark:bg-gray-600 rounded-b-2xl py-2">
                                    <h2 class="card-title  text-gray-800 dark:text-white justify-center ">Lorem</h2>
                                </div>
                            </div>
                            <div class="flex-1 card  h-auto shadow-md hover:shadow-xl">
                                <div class="container ">
                                    <img src="assets/images/categories/cat-6.png" class="rounded-t-2xl w-full " />
                                </div>
                                <div class="bg-green dark:bg-gray-600 rounded-b-2xl py-2">
                                    <h2 class="card-title  text-gray-800 dark:text-white justify-center ">Lorem</h2>
                                </div>
                            </div>
                        </div>
                        <div class="lg:flex flex-col hidden  lg:mt-[50px] md:mt-[30px] mt-[20px]">
                            <div class="flex flex-row justify-between">
                                <div
                                    class="font-bold text-transparent lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                                    Categories</div>
                                <div class="flex flex-row w-auto  ">
                                    <div class=" ">
                                        <button
                                            class="lg:h-[50px]  md:h-[40px] sm:h-[30px] w-auto font-medium items-center rounded-full bg-gradient-to-r from-lemon to-green border-none lg:text-xl px-4  cursor-pointer text-white dark:text-white hover:shadow-xl">
                                            More >>
                                        </button>
                                    </div>
                                </div>
                            </div> <!--assets/images/image-101.png-->
                            <div class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                                <div class=" flex items-start justify-center">
                                    <div
                                        class=" w-full rounded-[18px] bg-gradient-to-r from-lemon to-green p-1 shadow-md hover:shadow-xl">
                                        <div class="card card-side bg-white dark:bg-gray-600  ">
                                            <figure><img src="assets/images/mostviewed/image-1.png" alt="Album"
                                                    class="w-full h-full" />
                                            </figure>
                                            <div class="card-body ">
                                                <h2 class="card-title text-gray-800 dark:text-white  ">Beef Roast</h2>
                                                <p class="text-gray-800 dark:text-white ">Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing
                                                    elit </p>
                                                <div
                                                    class="bg-gradient-to-r from-lemon to-green rounded-full w-full h-[4px]">
                                                </div>
                                                <div class="card-actions justify-start">
                                                    <div
                                                        class=" rounded-full bg-gradient-to-r from-lemon to-green text-white font-bold py-2 px-4 cursor-pointer">
                                                        Beef
                                                </div>
                                                <div
                                                        class=" rounded-full bg-gradient-to-r from-lemon to-green text-white font-bold py-2 px-4 cursor-pointer">
                                                        Red Pepper
                                                </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" flex items-start justify-center">
                                    <div
                                        class=" w-full rounded-[18px] bg-gradient-to-r from-lemon to-green p-1 shadow-md hover:shadow-xl">
                                        <div class="card card-side bg-white dark:bg-gray-600  ">
                                            <figure><img src="assets/images/mostviewed/image-10.png" alt="Album"
                                                    class="w-full h-full" />
                                            </figure>
                                            <div class="card-body ">
                                                <h2 class="card-title text-gray-800 dark:text-white  ">lorem</h2>
                                                <p class="text-gray-800 dark:text-white ">Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing
                                                    elit </p>
                                                <div
                                                    class="bg-gradient-to-r from-lemon to-green rounded-full w-full h-[4px]">
                                                </div>
                                                <div class="card-actions justify-start">
                                                    <div class="flex flex-row ">
                                                        <div class=" flex space-x-3 ">
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2 bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>beef</h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2  bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>red pepper </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2  bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>Onion </h2>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" flex items-start justify-center">
                                    <div
                                        class=" w-full rounded-[18px] bg-gradient-to-r from-lemon to-green p-1 shadow-md hover:shadow-xl">
                                        <div class="card card-side bg-white dark:bg-gray-600  ">
                                            <figure><img src="assets/images/mostviewed/image-11.png" alt="Album"
                                                    class="w-full h-full" />
                                            </figure>
                                            <div class="card-body ">
                                                <h2 class="card-title text-gray-800 dark:text-white  ">lorem</h2>
                                                <p class="text-gray-800 dark:text-white ">Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing
                                                    elit </p>
                                                <div
                                                    class="bg-gradient-to-r from-lemon to-green rounded-full w-full h-[4px]">
                                                </div>
                                                <div class="card-actions justify-start">
                                                    <div class="flex flex-row ">
                                                        <div class=" flex space-x-3 ">
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2 bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>beef</h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2  bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>red pepper </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2  bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>Onion </h2>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" flex items-start justify-center">
                                    <div
                                        class=" w-full rounded-[18px] bg-gradient-to-r from-lemon to-green p-1 shadow-md hover:shadow-xl">
                                        <div class="card card-side bg-white dark:bg-gray-600  ">
                                            <figure><img src="assets/images/mostviewed/image-12.png" alt="Album"
                                                    class="w-full h-full" />
                                            </figure>
                                            <div class="card-body ">
                                                <h2 class="card-title text-gray-800 dark:text-white  ">lorem</h2>
                                                <p class="text-gray-800 dark:text-white ">Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing
                                                    elit </p>
                                                <div
                                                    class="bg-gradient-to-r from-lemon to-green rounded-full w-full h-[4px]">
                                                </div>
                                                <div class="card-actions justify-start">
                                                    <div class="flex flex-row ">
                                                        <div class=" flex space-x-3 ">
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2 bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>beef</h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2  bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>red pepper </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2  bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>Onion </h2>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" flex items-start justify-center">
                                    <div
                                        class=" w-full rounded-[18px] bg-gradient-to-r from-lemon to-green p-1 shadow-md hover:shadow-xl">
                                        <div class="card card-side bg-white dark:bg-gray-600  ">
                                            <figure><img src="assets/images/mostviewed/image-13.png" alt="Album"
                                                    class="w-full h-full" />
                                            </figure>
                                            <div class="card-body ">
                                                <h2 class="card-title text-gray-800 dark:text-white  ">lorem</h2>
                                                <p class="text-gray-800 dark:text-white ">Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing
                                                    elit </p>
                                                <div
                                                    class="bg-gradient-to-r from-lemon to-green rounded-full w-full h-[4px]">
                                                </div>
                                                <div class="card-actions justify-start">
                                                    <div class="flex flex-row ">
                                                        <div class=" flex space-x-3 ">
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2 bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>beef</h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2  bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>red pepper </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2  bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>Onion </h2>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" flex items-start justify-center">
                                    <div
                                        class=" w-full rounded-[18px] bg-gradient-to-r from-lemon to-green p-1 shadow-md hover:shadow-xl">
                                        <div class="card card-side bg-white dark:bg-gray-600  ">
                                            <figure><img src="assets/images/mostviewed/image-6.png" alt="Album"
                                                    class="w-full h-full" />
                                            </figure>
                                            <div class="card-body ">
                                                <h2 class="card-title text-gray-800 dark:text-white  ">lorem</h2>
                                                <p class="text-gray-800 dark:text-white ">Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing
                                                    elit </p>
                                                <div
                                                    class="bg-gradient-to-r from-lemon to-green rounded-full w-full h-[4px]">
                                                </div>
                                                <div class="card-actions justify-start">
                                                    <div class="flex flex-row ">
                                                        <div class=" flex space-x-3 ">
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2 bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>beef</h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2  bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>red pepper </h2>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                                <div
                                                                    class=" px-2  bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                                    <h2>Onion </h2>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
