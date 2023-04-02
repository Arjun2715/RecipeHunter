<template>
    <div class="flex flex-col lg:mt-[50px] md:mt-[30px] mt-[20px]">
        <div class="flex flex-row justify-between">
            <div
                class="font-bold text-transparent lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                Most Viewed</div>
            <div class="flex flex-row w-auto ">
                <div class="lg:text-xl pr-4  cursor-pointer text-gray-800 dark:text-white ">Day</div>
                <div class="lg:text-xl text-gray-500 hover:underline cursor-pointer text-gray-800 dark:text-gray-400 ">Week</div>
                <div class="lg:text-xl pl-4 text-gray-500 hover:underline cursor-pointer text-gray-800 dark:text-gray-400 ">Month</div>
            </div>
        </div>
        <div class="overflow-x-auto scrollbar  ">
            <div class="flex space-x-4  py-4"> <!--carousel overflow-x-scroll w-full py-4 space-x-4  rounded-box -->
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-1.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-2.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-3.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-4.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-5.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-6.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-7.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-8.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-9.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-10.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-11.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-12.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-13.png" class="rounded-box" />
                </div>
                <div class="carousel-item">
                    <img src="assets/images/mostviewed/image-14.png" class="rounded-box" />
                </div>
            </div>
        </div>

    </div>
</template>