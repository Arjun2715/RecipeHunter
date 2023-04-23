<template>
         <div class=" flex items-start justify-center">
                <div v-for="recipe in recentlyUpdated" :key="recipe.title" class=" w-full rounded-[18px] bg-gradient-to-r from-lemon to-green p-1 shadow-md hover:shadow-xl">
                    <div class="card card-side bg-white dark:bg-gray-600  ">
                        <figure><img src="assets/images/mostviewed/image-10.png" alt="Album" class="w-full h-full" />
                        </figure>
                        <div class="card-body ">
                            <h2 class="card-title text-gray-800 dark:text-white  ">{{ recipe.title }}</h2>
                            <p class="text-gray-800 dark:text-white ">{{ recipe.description }}</p>
                            <div class="bg-gradient-to-r from-lemon to-green rounded-full w-full h-[4px]"></div>
                            <div class="card-actions justify-start">
                                <div class="flex flex-row ">
                                    <div class=" flex space-x-3 ">
                                        <div v-for="ingredient in recipe.ingredients" :key="ingredient" class="p-1 px-1 bg-gradient-to-r from-lemon to-green rounded-full ">
                                            <div
                                                class=" cursor-pointer px-2 bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                <h2>{{ ingredient }}</h2>
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
<script>
export default{
    mounted() {
    console.log(this.data);
  },
  props: {
    recipeData: {
        type: Object,

    }
  },

}
  
  </script>