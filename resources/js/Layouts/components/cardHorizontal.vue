<template>
         <div v-for="item in recipedata" class=" flex items-start justify-center">
                <div class=" w-full h-full rounded-[18px] bg-gradient-to-r from-lemon to-green p-1 shadow-md hover:shadow-xl">
                    <div class="card card-side bg-white dark:bg-gray-600 h-full overflow-hidden ">
                            <img class=" "  :src="item.image" alt="Recipe Image here :(" style="width: 150px; height: 100%;"/>
                        <div class="card-body p-2">
                            <h2 class="card-title text-gray-800 dark:text-white text-[16px] ">{{ item.title }}</h2>
                            <p class="text-gray-800 dark:text-white ">Description</p>
                            <div class="bg-gradient-to-r from-lemon to-green rounded-full w-full h-[4px]"></div>
                            <div class="card-actions justify-start">
                                <div class="flex flex-row  ">
                                    <div class=" flex  flex-wrap   ">
                                        <div v-for="tag in item.tags" class="p-1 mt-2 ml-2 bg-gradient-to-r from-lemon to-green rounded-full ">
                                            <div
                                                class=" cursor-pointer px-2 bg-white rounded-full items-center justify-center text-gray-600 hover:bg-base-100 hover:text-white">
                                                <div class="whitespace-nowrap">{{ tag }}</div>
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
  props: {
    recipedata: {
    type: Array,
    required: true
  }
  },

}
  
  </script>