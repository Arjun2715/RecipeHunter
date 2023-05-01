<script scope>
import Footer from "../Layouts/components/Footer.vue";
import Header from "../Layouts/components/Header.vue";
import RecentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
import IngredientItem from "../Layouts/components/IngredientItem.vue";
export default {
    components: {
        Header,
        Footer,
        RecentlyUpdated,
        IngredientItem,
    },
    //example test data
    data() {
        return {
            Name: "",
            Description: "",
            Ingredients: [],
            newIngredient: "",
            Instructions: [],
            newInstructions: "",
            PrepTimeMinutes: 0,
            PrepTimeHours: 0,
            CookTimeMinutes: 0,
            CookTimeHours: 0,
            ImagePath: "",
            Diet: "",
            Cuisine: "",
        };
    },
    methods: {
        handleFileChange(event) {
            const file = event.target.files[0]; // Get the selected file name
            this.ImagePath = file.name;
        },
        addIngredient() {
            if (this.newIngredient) {
                this.Ingredients.push(this.newIngredient);
                console.log(this.Ingredients)
                this.newIngredient = "";
            }
        }, addInstructions() {
            if (this.newInstructions) {
                this.Instructions.push(this.newInstructions);
                console.log(this.Instructions)
                this.newInstructions = "";
            }
        },
    },
};
</script>
<template>
    <Header />
    <div class="flex flex-col mt-20">
        <div class="flex flex-col w-full">
            <div class="container mx-auto px-4 w-full h-full">
                <form class="h-auto">
                    <div class="flex flex-row justify-between">
                        <div
                            class="font-bold text-transparent text-xl lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                            Add New Recipes
                        </div>
                        <div class="flex flex-row w-auto">
                            <!-- @click="recipeData()" -->
                            <Link href="/newrecipepost" :data="{
                                Name: Name,
                                Description: Description,
                                Ingredients: Ingredients,
                                Instructions: Instructions,
                                PrepTimeMinutes: PrepTimeMinutes,
                                PrepTimeHours: PrepTimeHours,
                                CookTimeHours: CookTimeHours,
                                CookTimeMinutes: CookTimeMinutes,
                                ImagePath: ImagePath,
                                Diet: Diet,
                                Cuisine: Cuisine,
                            }" method="post" as="button" type="button"
                                class="lg:h-[50px] md:h-[40px] h-[30px] w-auto font-medium rounded-full bg-gradient-to-r from-lemon to-green border-none lg:text-xl px-4 cursor-pointer text-white dark:text-white hover:shadow-xl">
                            Save Recipe
                            </Link>
                        </div>
                    </div>
                    <div class="lg:flex flex-row mt-14">
                        <div class="flex-1 mx-4">
                            <div class="flex flex-col">
                                <img class="h-auto max-w-full rounded-t-lg" src="assets/images/image-101.png"
                                    style="filter: brightness(0.3)" alt="image description" />
                            </div>
                            <div class="flex flex-col justify-center w-auto">
                                <div
                                    class="btn border-none rounded-b-lg bg-gradient-to-r from-lemon to-green rounded-none dark:text-white">
                                    <input type="file" @change="handleFileChange" class="" placeholder="add image" />
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-col space-y-6 mx-4">
                                <div class="flex flex-row justify-between">
                                    <div class="flex flex-col w-full">
                                        <div class="font-medium text-lg text-gray-600 dark:text-white">
                                            Recipe Name
                                        </div>
                                        <input v-model="Name" type="text"
                                            class="border-2 border-gray-300 text-gray-900 text-sm focus:ring-green focus:border-green outline-none rounded-xl w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00"
                                            placeholder="Your Recipe name here" />
                                    </div>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <div class="flex flex-col w-full">
                                        <div class="font-medium text-lg text-gray-600 dark:text-white">
                                            Cuisine
                                        </div>
                                        <input type="text" v-model="Cuisine"
                                            class="border-2 border-gray-300 text-gray-900 text-sm focus:ring-green focus:border-green outline-none rounded-xl w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00"
                                            placeholder="Your Recipe's Cuisine Here(Optional)" />
                                    </div>
                                </div>
                                <div class="flex flex-row justify-between">
                                    <div class="flex flex-col w-full">
                                        <div class="font-medium text-lg text-gray-600 dark:text-white">
                                            Diet
                                        </div>
                                        <input type="text" v-model="Diet"
                                            class="border-2 border-gray-300 text-gray-900 text-sm focus:ring-green focus:border-green outline-none rounded-xl w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00"
                                            placeholder="Your Recipe's Diet Here(Optional)" />
                                    </div>
                                </div>
                                <div class="mb-4 flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full">
                                        <div class="font-medium text-lg text-gray-600 dark:text-white">
                                            Description
                                        </div>
                                        <textarea v-model="Description"
                                            class="block h-30 border-2 border-gray-300 text-gray-900 text-sm focus:ring-green focus:border-green outline-none rounded-xl w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00"
                                            placeholder="Your Recipe description here"></textarea>
                                    </div>
                                </div>
                                <div class="mb-4 flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full">
                                        <div class="font-medium text-lg text-gray-600 dark:text-white">
                                            Ingredients
                                        </div>
                                        <div
                                            class="block h-30 border-2 border-gray-300 text-gray-900 text-sm focus:ring-green hover:border-green outline-none rounded-xl w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00">
                                            <!-- <span>Your Recipe ingredients here</span> -->
                                            <div class="grow flex-1 dropdown dropdown-end py-1">
                                                <input v-model="newIngredient" input="text" tabindex="0"
                                                    class="w-full h-8 inline-flex placeholder-slate-800 text-left px-2 text-sm font-medium hover:bg-gray-300 bg-gray-300 border-none rounded-xl"
                                                    placeholder="Add Ingredients" />
                                                <a class="absolute right-0 top-[-4px] text-2xl outline-none border-none rounded-full text-gray-600 hover:text-gray-900  btn btn-primary"
                                                    @click="addIngredient">
                                                    +
                                                </a>
                                                <ul tabindex="0" class="menu p-2  rounded-box w-full grid grid-cols-1">
                                                    <IngredientItem v-for="(
                                                            Ingredient, index
                                                        ) in Ingredients" :key="index" :Ingredient="Ingredient" />
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full">
                                        <div class="font-medium text-lg text-gray-600 dark:text-white">
                                            Instructions(steps)
                                        </div>
                                        <div
                                            class="block h-30 border-2 border-gray-300 text-gray-900 text-sm focus:ring-green hover:border-green outline-none rounded-xl w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00">
                                            <!-- <span>Your Recipe ingredients here</span> -->
                                            <div class="grow flex-1 dropdown dropdown-end py-1">
                                                <input v-model="newInstructions" input="text" tabindex="0"
                                                    class="w-full h-8 inline-flex placeholder-slate-800 text-left px-2 text-sm font-medium hover:bg-gray-300 bg-gray-300 border-none rounded-xl"
                                                    placeholder="Add Instructions" />
                                                <a class="absolute right-0 top-[-4px] text-2xl outline-none border-none rounded-full text-gray-600 hover:text-gray-900  btn btn-primary"
                                                    @click="addInstructions">
                                                    +
                                                </a>
                                                <ul tabindex="0" class="menu p-2  rounded-box w-full grid grid-cols-1">
                                                    <div>
                                                        <IngredientItem v-for="(
                                                            Instruction, index
                                                        ) in Instructions" :key="index" :Ingredient="Instruction" />
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- <textarea
                                            v-model="Instructions"
                                            class="block h-30 border-2 border-gray-300 text-gray-900 text-sm focus:ring-green focus:border-green outline-none rounded-xl w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00"
                                            placeholder="Your Recipe instructions here"
                                        ></textarea> -->
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
                                <div class="mb-4 flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full text-gray-600 dark:text-white">
                                        <div class="font-medium text-lg">
                                            Prep. Time
                                            <p class="font-thin text-sm mb-2">
                                                How long does it take to prepare
                                                this recipe?
                                            </p>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex-1 mr-4">
                                                <div class="relative">
                                                    <div class="absolute left-3 top-2.5">
                                                        Hours
                                                    </div>
                                                    <input type="number" v-model="PrepTimeHours"
                                                        class="border-2 border-gray-300 text-gray-900 text-sm focus:ring-green focus:border-green rounded-xl w-full pl-16 outline-none p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00"
                                                        placeholder="0" />
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div class="relative">
                                                    <div class="absolute left-3 top-2.5">
                                                        Minutes
                                                    </div>
                                                    <input type="number" v-model="PrepTimeMinutes
                                                        "
                                                        class="border-2 border-gray-300 text-gray-900 text-sm focus:ring-green focus:border-green rounded-xl w-full pl-20 outline-none p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00"
                                                        placeholder="0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 flex flex-row justify-between space-x-4">
                                    <div class="flex flex-col w-full text-gray-600 dark:text-white">
                                        <div class="font-medium text-lg">
                                            Cook Time
                                            <p class="font-thin text-sm mb-2">
                                                How long does it take to cook
                                                this recipe?
                                            </p>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex-1 mr-4">
                                                <div class="relative">
                                                    <div class="absolute left-3 top-2.5">
                                                        Hours
                                                    </div>
                                                    <input type="number" v-model="CookTimeHours"
                                                        class="border-2 border-gray-300 text-gray-900 text-sm focus:ring-green focus:border-green rounded-xl w-full pl-16 outline-none p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00"
                                                        placeholder="0" />
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div class="relative">
                                                    <div class="absolute left-3 top-2.5">
                                                        Minutes
                                                    </div>
                                                    <input type="number" v-model="CookTimeMinutes
                                                        "
                                                        class="border-2 border-gray-300 text-gray-900 text-sm focus:ring-green focus:border-green rounded-xl w-full pl-20 outline-none p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00"
                                                        placeholder="0" />
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
