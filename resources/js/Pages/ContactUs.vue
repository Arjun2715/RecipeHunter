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

}
</script>
<template>
    <Header />
    <div class="flex flex-col lg:mt-8">
        <div>
            <div class=" flex flex-col w-full ">
                <div class="container mx-auto px-4 w-full h-full ">
                    <div class="h-auto">
                        <div class="flex flex-row justify-between">
                            <div
                                class="font-bold text-transparent lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                                Contact Us</div>    
                        </div>
                        <div class="flex flex-col w-auto">
                            <div class="flex-1 justify-center mx-auto  ">
                                <div class=" flex flex-col w-[350px] font-medium text-lg text-gray-600 dark:text-white">Name

                                    <input type="text"
                                        class="  border-2 outline-none border-gray-300 text-gray-900 text-sm  
                                                             focus:ring-green focus:border-green rounded-xl   p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                             dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                        placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="flex-1 justify-center mx-auto">
                                <div class=" flex flex-col w-[350px] font-medium text-lg text-gray-600 dark:text-white">
                                    Email

                                    <input type="email"
                                        class="  border-2 outline-none border-gray-300 text-gray-900 text-sm  
                                                             focus:ring-green focus:border-green rounded-xl   p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                             dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                        placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="flex-1 justify-center mx-auto">
                                <div class=" flex flex-col w-[350px] font-medium text-lg text-gray-600 dark:text-white">
                                    Comment

                                    <textarea type="text"
                                        class="  border-2 outline-none border-gray-300 text-gray-900 text-sm  h-44
                                                         focus:ring-green focus:border-green rounded-xl   p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                         dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                        placeholder=""></textarea>
                                </div>
                                <div class="flex-1  py-4">
                                    <button
                                        class="h-4xl w-auto font-medium items-center rounded-full bg-gradient-to-r from-lemon to-green border-none lg:text-xl px-4  cursor-pointer text-white dark:text-white">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="absolute  bottom-0 w-full"> -->
        <Footer />
    <!-- </div> -->
</template>
