<template>
    <div v-for="item in recipedata" class="flex items-start justify-start">
        <Link
            href="/viewrecipe"
            meathod="get"
            as="button"
            type="button"
            :data="{ recipeId: item.id }"
        >
            <div class="w-full h-full rounded-[18px] shadow-md hover:shadow-xl">
                <div
                    class="card card-side bg-white dark:bg-gray-600 h-52 overflow-hidden"
                >
                    <img
                        class="object-cover"
                        :src="item.image"
                        alt="Recipe Image here :("
                        style="width: 200px; "
                    />

                    <div class="card-body p-2 overflow-visible">
                        <h2
                            class="card-title text-gray-800 dark:text-white text-xl text-start"
                        >
                            {{ item.title }}
                        </h2>
                        
                        <div class="rating rating-sm align-bottom">
                            <input
                                type="radio"
                                name="rating-7"
                                class="mask mask-star-2 bg-orange-400"
                            />
                            <input
                                type="radio"
                                name="rating-7"
                                class="mask mask-star-2 bg-orange-400"
                            />
                            <input
                                type="radio"
                                name="rating-7"
                                checked
                                class="mask mask-star-2 bg-orange-400"
                            />
                            <input
                                type="radio"
                                name="rating-7"
                                class="mask mask-star-2 bg-orange-400"
                            />
                            <input
                                type="radio"
                                name="rating-7"
                                class="mask mask-star-2 bg-orange-400"
                            />
                        </div>
                        <div class="card-actions justify-start">
                            <div class="flex flex-row">
                                <div
                                    v-for="tag in item.tags"
                                    class="flex flex-wrap justify-around"
                                >
                                    <div class="whitespace-nowrap mr-2">
                                        <label
                                            class="relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] before:bottom-0 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer before:hover:scale-x-100 before:scale-x-0 before:origin-top-left before:transition before:ease-in-out before:duration-300"
                                        >
                                            {{
                                                capitalizeFirstLetter(tag)
                                            }}</label
                                        >
                                    </div>
                                    <!-- </Link> -->
                                </div>
                            </div>
                        </div>
                        <label
                            id="desc"
                            class="text-gray-800 dark:text-white h-auto text-sm text-start overflow-y-scroll"
                            >{{ item.description }}
                        </label>
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
            required: true,
        },
    },
    computed: {
        capitalizeFirstLetter() {
            return function (string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            };
        },
    },
};
</script>
