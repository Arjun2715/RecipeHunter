<template>
    <div v-for="item in recipedata" class=" flex items-start justify-start ">
        <Link href="/viewrecipe" meathod="get" as="button" type="button" :data="{ recipeId: item.id }">

        <div class="w-full h-full rounded-[18px] shadow-md hover:shadow-xl">
            <div class="card card-side bg-white dark:bg-gray-600 h-52 overflow-hidden">
                <img class=" " :src="item.image" alt="Recipe Image here :(" style="width: 200px; height: 100%" />

                <div class="card-body p-2 overflow-visible ">
                    <h2 class="card-title text-gray-800 dark:text-white text-xl text-start ">
                        {{ item.title }}
                    </h2>
                    <label id="desc" class="text-gray-800 dark:text-white h-auto text-sm text-start">{{ item.description }} </label>

                    <div class="card-actions justify-start">
                        <div class="flex flex-row ">
                            <div v-for="tag in item.tags" class="flex flex-wrap justify-around">
                                <div class="whitespace-nowrap ml-2">
                                    {{ tag }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </Link>

    </div>
</template>
<script>
export default {
    props: {
        recipedata: {
            type: Array,
            required: true
        }
    },

}

</script>