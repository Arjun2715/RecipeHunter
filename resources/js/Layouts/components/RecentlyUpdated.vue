<template>
    <div class="lg:flex flex-col hidden  lg:mt-[50px] md:mt-[30px] mt-[20px]">
        <div class="flex flex-row justify-between">
            <div
                class="font-bold text-transparent lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                Recently Updated</div>
            <div class="flex flex-row w-auto  ">
                <div class=" ">
                    <button
                        class="lg:h-[50px]  md:h-[40px] sm:h-[30px] w-auto font-medium items-center rounded-full bg-gradient-to-r from-lemon to-green border-none lg:text-xl px-4  cursor-pointer text-white dark:text-white">
                        More >>
                    </button>

                </div>
            </div>
        </div> <!--assets/images/image-101.png-->
        <div class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
            <div class="card card-side bg-white dark:bg-gray-600 shadow-xl hover:shadow-2xl">
                <figure><img src="assets/images/mostviewed/image-1.png" alt="Album" class="" /></figure>
                <div class="card-body">
                    <h2 class="card-title text-gray-800 dark:text-white  ">Beef Roast</h2>
                    <p class="text-gray-800 dark:text-white ">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                    <div class="card-actions justify-start">
                        <div class="flex flex-row ">
                            <div class=" flex  ">
                                <div class="p-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                    <div class=" bg-white rounded-full items-center justify-center text-gray-600">
                                        beef
                                    </div>
                                </div>
                            </div>
                            <div class=" flex  ">
                                <div class="p-1 ml-4  bg-gradient-to-r from-lemon to-green rounded-full ">
                                    <div class=" bg-white rounded-full items-center justify-center text-gray-600">
                                        beef
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>