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
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item2',
                    image: 'assets/images/mostviewed/image-13.png'
                },
                {
                    title: 'Item 3',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item3',
                    image: 'assets/images/mostviewed/image-12.png'
                },
                {
                    title: 'Item 1',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item1',
                    image: 'assets/images/mostviewed/image-11.png'
                },
                {
                    title: 'Item 2',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    link: 'https://example.com/item2',
                    image: 'assets/images/mostviewed/image-13.png'
                },
                {
                    title: 'Item 3',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
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
                    <div class="flex ">
                        <div
                            class="py-2 lg:py-4 justify-start items-start font-bold text-transparent  lg:text-4xl md:text-xl text-lg bg-clip-text bg-gradient-to-r from-lemon to-green">
                            Filter
                        </div>
                    </div>
                    <form>
                        <div
                            class="py-2 lg:flex lg:flex-wrap lg:space-x-2 lg:items-center md:grid md:space-x-2 md:grid-cols-4 md:items-center grid space-x-2 grid-cols-2 items-center">
                            <div class="grow flex-1  h-auto ml-2 lg:ml-0">
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-white  dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="voice-search" class="bg-gradient-to-r from-lemon-20 to-green-20 border-2 border-gray-300 text-gray-900 text-sm rounded-full 
                                                                               focus:ring-lemon focus:border-lemon  w-full pl-10 p-2.5  
                                                                               dark:bg-gray-700 dark:border-gray-600 dark:placeholder-white dark:text-white dark:focus:ring-lemon 
                                                                               dark:focus:ring-lemon"
                                        placeholder="Search... " required>
                                </div>
                            </div>
                            <div class=" grow flex-1 dropdown dropdown-end  py-1">
                                <input tabindex="0"
                                    class="btn w-full inline-flex text-left py-2.5 px-3 text-sm font-medium text-gray-500 dark:text-white   bg-green  
                                    border-none  rounded-full bo  border-lemon hover:bg-green-80" placeholder="Ingredients"/>
                                    
                                <ul tabindex="0"
                                    class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-52 ">
                                    <li class="flex flex-row mb-2">
                                        <input type="checkbox" name="type[]" value="Item1" id="Item1"
                                            class=" border-noneh-4 w-4  mr-2">
                                        <lable class="p-0" for="Item1">
                                            Item1
                                        </lable>
                                    </li>
                                    <li class="flex flex-row"><input type="checkbox" name="type[]" value="Item2"
                                            class=" mr-2">Item2</li>
                                </ul>
                            </div>
                            <div class="grow flex-1 dropdown dropdown-end  py-1">
                                <label tabindex="0"
                                    class="btn w-full inline-flex items-center py-2.5 px-3 text-sm font-medium text-gray-500 dark:text-white  bg-green  
                                    border-none  rounded-full bo  border-lemon hover:bg-green-80"><span></span>Cuisine</label>
                                <ul tabindex="0"
                                    class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-52 ">
                                    <li class="flex flex-row mb-2">
                                        <input type="checkbox" name="type[]" value="Item1" id="Item1"
                                            class=" border-noneh-4 w-4  mr-2">
                                        <lable class="p-0" for="Item1">
                                            Item1
                                        </lable>
                                    </li>
                                    <li class="flex flex-row"><input type="checkbox" name="type[]" value="Item2"
                                            class=" mr-2">Item2</li>
                                </ul>
                            </div>
                            <div class="grow flex-1 dropdown dropdown-end  py-1">
                                <label tabindex="0"
                                    class="btn w-full inline-flex items-center py-2.5 px-3  text-sm font-medium text-gray-500 dark:text-white  
                                                                                                                                        bg-green  border-none  rounded-full bo  border-lemon hover:bg-green-80"><span></span>Diet</label>
                                <ul tabindex="0"
                                    class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-52 ">
                                    <li class="flex flex-row mb-2">
                                        <input type="checkbox" name="type[]" value="Item1" id="Item1"
                                            class=" border-noneh-4 w-4  mr-2">
                                        <lable class="p-0" for="Item1">
                                            Item1
                                        </lable>
                                    </li>
                                    <li class="flex flex-row"><input type="checkbox" name="type[]" value="Item2"
                                            class=" mr-2">Item2</li>
                                </ul>
                            </div>
                            
                            <div class="grow flex-1 dropdown dropdown-end  py-1">
                                <label tabindex="0"
                                    class="btn w-full inline-flex items-center py-2.5 px-3  text-sm font-medium text-gray-500 dark:text-white  
                                                                                                                                        bg-green  border-none  rounded-full bo  border-lemon hover:bg-green-80">
                                    <span></span>
                                    Prep. Time
                                </label>
                                <ul tabindex="0"
                                    class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-52 ">
                                    <li class="flex flex-row mb-2">
                                        <input type="checkbox" name="type[]" value="Item1" id="Item1"
                                            class=" border-noneh-4 w-4  mr-2">
                                        <lable class="p-0" for="Item1">
                                            Item1
                                        </lable>
                                    </li>
                                    <li class="flex flex-row"><input type="checkbox" name="type[]" value="Item2"
                                            class=" mr-2">Item2</li>
                                </ul>
                            </div>

                            <div class="grow flex-1 dropdown dropdown-end  py-1">
                                <label tabindex="0"
                                    class="btn w-full inline-flex items-center py-2.5 px-3  text-sm font-medium text-gray-500 dark:text-white  
                                                                                                                        bg-green  border-none  rounded-full  border-lemon hover:bg-green-80"><span></span>Sort</label>
                                <ul tabindex="0"
                                    class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-52 ">
                                    <li class="flex flex-row mb-2">
                                        <input type="checkbox" name="type[]" value="Item1" id="Item1"
                                            class=" border-noneh-4 w-4  mr-2">
                                        <lable class="p-0" for="Item1">
                                            Item1
                                        </lable>
                                    </li>
                                    <li class="flex flex-row"><input type="checkbox" name="type[]" value="Item2"
                                            class=" mr-2">Item2</li>
                                </ul>
                            </div>
                            <div class="grow flex-1 h-full py-1">
                                <Link type="submit"
                                    class="btn w-full h-full inline-flex items-center py-2.5 px-3   text-sm font-medium text-gray-500 dark:text-white  bg-gradient-to-r from-lemon to-green 
                                                                                                border-none  rounded-full border border-lemon hover:bg-lemon focus:ring-4 focus:outline-none focus:ring-lemon-60 
                                                                                                dark:hover: dark:focus:ring-lemon-60">
                                <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>Filter
                                </Link>
                            </div>
                        </div>
                    </form>
                    <div class="h-auto">
                        <!--search info cards here -->
                        <!--fix uneven cards -->

                        <div
                            class=" py-2 grid lg:grid-cols-3  lg:items-center  md:grid  md:grid-cols-2 md:items-center   grid-cols-1 items-center w-full h-full">
                            <div v-for="item in items" class=" flex-1 m-4 ">
                                <div
                                    class=" w-full h-full rounded-[18px] bg-gradient-to-r from-lemon to-green p-1 shadow-md hover:shadow-xl">
                                    <div class="card card-side bg-white dark:bg-gray-600 h-full overflow-hidden ">
                                        <img class=" " :src="item.image" alt="Recipe Image here :("
                                            style="width: 150px; height: 100%;" />
                                        <div class="card-body p-2">
                                            <h2 class="card-title text-gray-800 dark:text-white text-2xl ">{{ item.title
                                            }}</h2>
                                            <!-- <p class="text-gray-800 dark:text-white ">description</p>
                                            <div class="bg-gradient-to-r from-lemon to-green rounded-full w-full h-[4px]">
                                            </div>
                                            <div class="card-actions justify-start">
                                                <div class="flex flex-row  ">
                                                    <div class=" flex  flex-wrap   ">
                                                        <div v-for="tag in item.tags"
                                                            class="p-1 mt-2 ml-2 bg-gradient-to-r from-lemon to-green rounded-full ">
                                                            <div
                                                                class=" cursor-pointer px-2 bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-gray-500 dark:text-white ">
                                                                <div class="whitespace-nowrap">{{ tag }}</div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div> -->
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
<Footer /></template>
