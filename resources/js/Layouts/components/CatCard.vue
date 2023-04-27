<template>
    <div v-for="item in data"  class=" flex items-start justify-center">
        <div class=" w-full rounded-[18px] bg-gradient-to-r from-lemon to-green p-1 shadow-md hover:shadow-xl">
            <div class="card card-side bg-white dark:bg-gray-600  ">
                <figure><img src="" alt="img :(" class="w-full h-full" />
                </figure>
                <div class="card-body p-4">
                    <h2 class="card-title text-gray-800 dark:text-white ">{{ item.name }}</h2>
                    <!-- <p class="text-gray-800 dark:text-white ">{{ item.description }}
                    </p> -->
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            data: Array,
        }
    }
</script>