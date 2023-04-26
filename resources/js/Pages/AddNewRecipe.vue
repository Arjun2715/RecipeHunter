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
            Name: "",
            Description: "",
            Ingredients: "",
            Instructions: "",
            PrepTimeMinutes: 0,
            PrepTimeHours: 0,
            CookTimeMinutes: 0,
            CookTimeHours: 0,
            imagePath: "",
            Diet: "",
            Cuisine: "",
            // recipe: [this.Name, this.Diet, this.Cuisine, this.Description, this.Ingredients, this.Instructions, this.PrepTimeMinutes, this.PrepTimHours, this.CookTimeHours,
            // this.CookTimeMinutes, 'assets/images/' + this.imagePath,],

        }
    },
    methods: {
        // recipeData() {
        //     this.Name,
        //         this.Description,
        //         this.Ingredients,
        //         this.Instructions,
        //         this.PrepTimeMinutes,
        //         this.PrepTimeHours,
        //         this.CookTimeHours,
        //         this.CookTimeMinutes,
        //         'assets/images/' + this.imagePath,
        //         this.Diet,
        //         this.Cuisine
        // },
        handleFileChange(event) {
            const file = event.target.files[0]; // Get the selected file name
            this.imagePath = file.name;
        },
    },
}
</script>
<template>
    <RecipeHunterLayout />
    <div class="flex flex-col mt-8">
        <div class=" flex flex-col w-full ">
            <div class="container mx-auto px-4 w-full h-full ">
                <form class="h-auto">
                    <div class="flex flex-row justify-between">
                        <div
                            class="font-bold text-transparent text-xl lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                            Add New Recipes</div>
                        <div class="flex flex-row w-auto  ">
                            <!-- @click="recipeData()" -->
                            <Link  href="/newrecipepost" :data="{
                                Name: Name,
                                Description: Description,
                                Ingredients: Ingredients,
                                Instructions: Instructions,
                                PrepTimeMinutes: PrepTimeMinutes,
                                PrepTimeHours: PrepTimeHours,
                                CookTimeHours: CookTimeHours,
                                CookTimeMinutes: CookTimeMinutes,
                                imagePath: imagePath,
                                Diet: Diet,
                                Cuisine: Cuisine}" method="post" as="button" type="button"
                                class="lg:h-[50px]  md:h-[40px] h-[30px] w-auto font-medium  rounded-full bg-gradient-to-r from-lemon to-green border-none lg:text-xl px-4  cursor-pointer text-white dark:text-white hover:shadow-xl">
                            Save Recipe
                            </Link>
                        </div>
                    </div>
                    <div class="lg:flex flex-row  mt-14  ">
                        <div class="flex-1  mx-4 ">
                            <div class="flex flex-col ">
                                <img class="h-auto max-w-full rounded-t-lg " src="assets/images/image-101.png"
                                    alt="image description">
                            </div>
                            <div class="flex flex-col justify-center w-auto  ">
                                <div
                                    class=" btn border-none rounded-b-lg bg-gradient-to-r from-lemon to-green rounded-none dark:text-white">
                                    <input type="file" @change="handleFileChange" class="" placeholder="add image" />

                                </div>

                            </div>
                            <div class=" mt-2 flex flex-row justify-between space-x-4  ">
                                <div class="flex flex-col w-full  ">
                                    <div class=" font-medium text-lg text-gray-600 dark:text-white">Nutrition Facts
                                    </div>
                                    <div class="flex flex-col space-y-2 text-base   border-2 rounded-lg border-gray-300 p-4 text-gray-400 
                                                                    dark:text-white dark:bg-gray-700"><br>
                                        <div class="flex flex-row justify-between">
                                            <label for="">Serving Size:</label>
                                            <div><input class="border-1 outline-none  text-right  border-b" type="number"
                                                    min="1" max="50" name="" id=""
                                                    style="background-color: transparent; width: 50px;">Serving</div>
                                        </div>
                                        <div class="flex flex-row justify-between">
                                            <label for="">Amount Per Serving:</label>
                                            <div><input class="border-1 outline-none  text-right  border-b" type="number"
                                                    min="1" max="50" name="" id=""
                                                    style="background-color: transparent; width: 50px;">Calories</div>
                                        </div>
                                        <hr>
                                        <!-- <div class="flex flex-row justify-between">
                                            <label for="">Amount Per Serving:</label>
                                            <div><input class="border-1 outline-none  text-right  border-b" type="number" min="1" max="50" name="" id="" 
                                                 style="background-color: transparent; width: 50px;">Calories</div>
                                        </div> -->
                                        <label for="Fat">Fat</label>
                                        <label for="Cholesterol">Cholesterol</label>
                                        <label for="Sodium">Sodium</label>
                                        <label for="Carbohydrates">Carbohydrates</label>
                                        <label for="Sugars">Sugars</label>
                                        <label for="Sugars">Sugars</label>
                                        <label for="Protein">Protein</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1  ">
                            <div class="flex flex-col space-y-6  mx-4">
                                <div class="   flex flex-row justify-between ">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">Recipe Name
                                        </div>
                                        <input v-model="Name" type="text"
                                            class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                                   focus:ring-green focus:border-green outline-none rounded-xl w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                            placeholder="Your Recipe name here">
                                    </div>
                                </div>
                                <div class="   flex flex-row justify-between ">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">Cuisine
                                        </div>
                                        <input type="text" v-model="Cuisine"
                                            class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                                   focus:ring-green focus:border-green outline-none rounded-xl w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                            placeholder="Your Recipe's Cuisine Here(Optional)">
                                    </div>
                                </div>
                                <div class="   flex flex-row justify-between ">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">Diet
                                        </div>
                                        <input type="text" v-model="Diet"
                                            class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                                   focus:ring-green focus:border-green outline-none rounded-xl w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                            placeholder="Your Recipe's Diet Here(Optional)">
                                    </div>
                                </div>
                                <div class=" mb-4  flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">Description
                                        </div>
                                        <textarea v-model="Description"
                                            class="block h-30 border-2 border-gray-300 text-gray-900 text-sm  
                                                                   focus:ring-green focus:border-green outline-none rounded-xl w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                            placeholder="Your Recipe description here"></textarea>

                                    </div>
                                </div>
                                <div class=" mb-4  flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">Ingredients
                                        </div>
                                        <textarea v-model="Ingredients"
                                            class="block h-30  border-2 border-gray-300 text-gray-900 text-sm  
                                                                   focus:ring-green focus:border-green outline-none rounded-xl w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                            placeholder="Your Recipe ingredients here"></textarea>

                                    </div>
                                </div>
                                <div class=" mb-4  flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  ">
                                        <div class=" font-medium text-lg text-gray-600 dark:text-white">
                                            Instructions(steps)
                                        </div>
                                        <textarea v-model="Instructions"
                                            class="block h-30  border-2 border-gray-300 text-gray-900 text-sm  
                                                                   focus:ring-green focus:border-green  outline-none rounded-xl w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                            placeholder="Your Recipe instructions here"></textarea>

                                    </div>
                                </div>
                                <!-- <div class=" mb-4  flex flex-row justify-between space-x-4">
                                <div class="flex flex-col w-full  ">
                                    <div class="form-control rounded-xl">
                                            <div class="input-group ">
                                                <select class="select ">
                                                    <option disabled selected>Pick category</option>
                                                    <option>T-shirts</option>
                                                    <option>Mugs</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- 
                                                        cojemos algo como este web 
                                                        https://www.verywellfit.com/recipe-nutrition-analyzer-4157076 -->

                                <div class=" mb-4  flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  text-gray-600 dark:text-white">
                                        <div class=" font-medium text-lg ">Prep. Time
                                            <p class="font-thin text-sm mb-2">How long does it take to prepare this recipe?
                                            </p>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex-1 mr-4">
                                                <div class="relative ">
                                                    <div class="absolute left-3 top-2.5">
                                                        Hours

                                                    </div>
                                                    <input type="number" v-model="PrepTimeHours"
                                                        class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                                   focus:ring-green focus:border-green rounded-xl w-full pl-16  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                        placeholder="0">
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div class="relative ">
                                                    <div class="absolute left-3 top-2.5">
                                                        Minutes

                                                    </div>
                                                    <input type="number" v-model="PrepTimeMinutes"
                                                        class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                                   focus:ring-green focus:border-green rounded-xl w-full pl-20  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                        placeholder="0">

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class=" mb-4  flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full  text-gray-600 dark:text-white">
                                        <div class=" font-medium text-lg ">Cook Time
                                            <p class="font-thin text-sm mb-2">How long does it take to cook this recipe?
                                            </p>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex-1 mr-4">
                                                <div class="relative ">
                                                    <div class="absolute left-3 top-2.5">
                                                        Hours

                                                    </div>
                                                    <input type="number" v-model="CookTimeHours"
                                                        class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                                   focus:ring-green focus:border-green rounded-xl w-full pl-16  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                        placeholder="0">
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div class="relative ">
                                                    <div class="absolute left-3 top-2.5">
                                                        Minutes

                                                    </div>
                                                    <input type="number" v-model="CookTimeMinutes"
                                                        class="  border-2 border-gray-300 text-gray-900 text-sm  
                                                                   focus:ring-green focus:border-green rounded-xl w-full pl-20  p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                                                   dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00  "
                                                        placeholder="0">

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <Footer />
</template>
<style>
.image-upload>input {
    display: none;
}
</style>
