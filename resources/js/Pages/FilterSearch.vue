<script scope>
import Footer from "../Layouts/components/Footer.vue";
import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
import RecentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
import IngredientItem from "../Layouts/components/IngredientItem.vue";
export default {
    props: {
        data: Object,
    },
    components: {
        RecipeHunterLayout,
        Footer,
        RecentlyUpdated,
        IngredientItem,
    },
    data() {
        return {
            ingredients: [
                "Pasta",
                "Tomatoes",
                "Basil",
                "Garlic",
                "green bell pepper",
                "white onion",
                "feta cheese",
                "Olive Oil",
            ],

            newIngredient: "",
            cuisines: [
                "Spanish",
                "French",
                "Italian",
                "Asian",
                "Chinese",
                "Indian",
            ],
            newCuisines: "",
            sort: ["meta-score", "popularity", "healthiness", "price", "time"],
            diets: ['Vegan', 'Gluten Free', 'Primal', 'Vegetarian', 'Whole30', 'Paleo']
        };
    },
    methods: {
        addIngredient() {
            if (this.newIngredient) {
                this.ingredients.push(this.newIngredient);
                this.newIngredient = "";
            }
        },
        addCuisines() {
            if (this.newCuisines) {
                this.cuisines.push(this.newCuisines);
                this.newCuisines = "";
            }
        },
        sort() {
            // if (this.newCuisines) {
            //     this.cuisines.push(this.newCuisines);
            //     this.newCuisines = "";
            // }
        },
    },
};
</script>
<template>
    <RecipeHunterLayout />
    <div class="flex flex-col lg:mt-8">
        <div>
            <div class="flex flex-col w-full">
                <div class="container mx-auto px-4 w-full h-full">
                    <div class="flex">
                        <div
                            class="py-2 lg:py-4 justify-start items-start font-bold text-transparent lg:text-4xl md:text-xl text-lg bg-clip-text bg-gradient-to-r from-lemon to-green">
                            Filter
                        </div>
                    </div>
                    <!-- <form> -->
                    <div
                        class="py-2 lg:flex lg:flex-wrap lg:space-x-2 lg:items-center md:grid md:space-x-2 md:grid-cols-4 md:items-center grid space-x-2 grid-cols-2 items-center">
                        <div class="grow flex-1 h-auto ml-2 lg:ml-0">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="voice-search"
                                    class="bg-gradient-to-r from-lemon-20 to-green-20 border-2 border-gray-300 text-gray-900 text-sm rounded-full focus:ring-lemon focus:border-lemon w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-white dark:text-white dark:focus:ring-lemon"
                                    placeholder="Search... " />
                            </div>
                        </div>
                        <div class="grow flex-1 dropdown dropdown-end py-1">
                            <input v-model="newIngredient" input="text" tabindex="0" class="btn w-full inline-flex text-left py-2.5 px-3 text-sm font-medium text-gray-500 dark:text-white bg-green border-none 
                                rounded-full bo border-lemon hover:bg-green-80" placeholder="Ingredients" />
                            <a class=" absolute right-0 bg-gradient-to-r from-lemon border-none to-green rounded-full text-gray-500  btn btn-primary"
                                @click="addIngredient">Add</a>

                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-full grid grid-cols-1">
                                <IngredientItem v-for="(ingredient, index) in ingredients" :key="index"
                                    :Ingredient="ingredient" />
                            </ul>
                        </div>
                        <div class="grow flex-1 dropdown dropdown-end py-1">
                            <input v-model="newCuisines" input="text" tabindex="0"
                                class="btn w-full inline-flex text-left py-2.5 px-3 text-sm font-medium text-gray-500 dark:text-white bg-green border-none rounded-full bo border-lemon hover:bg-green-80"
                                placeholder="Cuisine" />
                            <a class=" absolute right-0 bg-gradient-to-r from-lemon border-none to-green rounded-full  btn btn-primary text-gray-500"
                                @click="addCuisines">Add</a>
                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-full grid grid-cols-1">
                                <IngredientItem v-for="(ingredient, index) in cuisines" :key="index"
                                    :Ingredient="ingredient" />
                            </ul>
                        </div>
                        <div class="grow flex-1 dropdown dropdown-end py-1">
                            <input v-model="newDiet" input="text" tabindex="0"
                                class="btn w-full inline-flex text-left py-2.5 px-3 text-sm font-medium text-gray-500 dark:text-white bg-green border-none rounded-full bo border-lemon hover:bg-green-80"
                                placeholder="Cuisine" />
                            <a class=" absolute right-0 bg-gradient-to-r from-lemon border-none to-green rounded-full  btn btn-primary text-gray-500"
                                @click="addDiet">Add</a>
                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-full grid grid-cols-1">
                                <IngredientItem v-for="(ingredient, index) in diets" :key="index"
                                    :Ingredient="ingredient" />
                            </ul>
                        </div>


                        <div class="grow flex-1 dropdown dropdown-end py-1">
                            <label tabindex="0"
                                class="btn w-full inline-flex items-center py-2.5 px-3 text-sm font-medium text-gray-500 dark:text-white bg-green border-none rounded-full bo border-lemon hover:bg-green-80">
                                <span></span>
                                Prep. Time
                            </label>
                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-52">
                                <li class="flex flex-row mb-2">
                                    <input type="checkbox" name="type[]" value="Item1" id="Item1"
                                        class="border-noneh-4 w-4 mr-2" />
                                    <lable class="p-0" for="Item1">
                                        Item1
                                    </lable>
                                </li>
                                <li class="flex flex-row">
                                    <input type="checkbox" name="type[]" value="Item2" class="mr-2" />Item2
                                </li>
                            </ul>
                        </div>
                        <div class="grow flex-1 dropdown dropdown-end py-1">
                            <label tabindex="0"
                                class="btn w-full inline-flex text-center py-2.5 px-3 text-sm font-medium text-gray-500 dark:text-white bg-green border-none rounded-full bo border-lemon hover:bg-green-80"
                                placeholder="">Sort</label>
                            <!-- <a class=" absolute right-0 bg-gra dient-to-r from-lemon border-none to-green rounded-full  btn btn-primary text-gray-500"
                                >Add</a> -->

                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-full grid grid-cols-1">
                                <IngredientItem v-for="(ingredient, index) in sort" :key="index" :Ingredient="ingredient" />
                            </ul>
                        </div>
                        <div class="grow flex-1 h-full py-1">
                            <Link type="submit"
                                class="btn w-full h-full inline-flex items-center py-2.5 px-3 text-sm font-medium text-gray-500 dark:text-white bg-gradient-to-r from-lemon to-green border-none rounded-full border border-lemon hover:bg-lemon focus:ring-4 focus:outline-none focus:ring-lemon-60 dark:hover: dark:focus:ring-lemon-60">
                            <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>Filter
                            </Link>
                        </div>
                    </div>
                    <!-- </form> -->
                    <div class="h-auto">
                        <!--search info cards here -->

                        <div
                            class="py-2 grid lg:grid-cols-3 lg:items-center md:grid md:grid-cols-2 md:items-center grid-cols-1 items-center w-full h-full">
                            <div v-for="item in data.recipes" class="flex-1 m-4">
                                <div
                                    class="w-full h-full rounded-[18px] bg-gradient-to-r from-lemon to-green p-1 shadow-md hover:shadow-xl">
                                    <div class="card card-side bg-white dark:bg-gray-600 h-48 overflow-hidden">
                                        <img class=" " :src="item.image" alt="Recipe Image here :("
                                            style="width: 200px; height: 100%" />
                                        <div class="card-body p-2">
                                            <h2 class="card-title text-gray-800 dark:text-white text-xl">
                                                {{ item.title }}
                                            </h2>
                                            <!-- <p class="text-gray-800 dark:text-white h-auto">{{ item.description }}</p> -->
                                            <div class="bg-gradient-to-r from-lemon to-green rounded-full w-full h-[4px]">
                                            </div>
                                            <div class="card-actions justify-start">
                                                <div class="flex flex-row  ">
                                                    <div class=" flex  flex-wrap   ">
                                                        <div v-for="tag in item.tags"
                                                            class="p-1 mt-2 ml-2 bg-gradient-to-r from-lemon to-green rounded-full ">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>
<style>
/* Hide the default checkbox */
.containercheck input {
    display: none;
}

.containercheck {
    display: block;
    position: relative;
    cursor: pointer;
    padding: 8px;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
}

/* Create a custom checkbox */
.checkmark {
    position: relative;
    top: 0;
    left: 0;
    height: 1em;
    width: 1em;
    background-color: #2196f300;
    border-radius: 0.25em;
    transition: all 0.6s;
}

/* When the checkbox is checked, add a blue background */
.container input:checked~.checkmark {
    background-color: #2196f3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    transform: rotate(0deg);
    border: 0.1em solid black;
    left: 0;
    top: 0;
    width: 1em;
    height: 1em;
    border-radius: 0.25em;
    transition: all 0.4s, border-width 0.1s;
}

/* Show the checkmark when checked */
.container input:checked~.checkmark:after {
    left: 0.45em;
    top: 0.25em;
    width: 0.25em;
    height: 0.5em;
    border-color: #fff0 white white #fff0;
    border-width: 0 0.15em 0.15em 0;
    border-radius: 0em;
    transform: rotate(45deg);
}

.button {
    --width: 100px;
    --height: 35px;
    --tooltip-height: 35px;
    --tooltip-width: 90px;
    --gap-between-tooltip-to-button: 18px;
    --button-color: #1163ff;
    --tooltip-color: #fff;
    width: var(--width);
    height: var(--height);
    background: var(--button-color);
    position: relative;
    text-align: center;
    border-radius: 0.45em;
    font-family: "Arial";
    transition: background 0.3s;
}

.button::before {
    position: absolute;
    content: attr(data-tooltip);
    width: var(--tooltip-width);
    height: var(--tooltip-height);
    background-color: var(--tooltip-color);
    font-size: 0.9rem;
    color: #111;
    border-radius: .25em;
    line-height: var(--tooltip-height);
    bottom: calc(var(--height) + var(--gap-between-tooltip-to-button) + 10px);
    left: calc(50% - var(--tooltip-width) / 2);
}

.button::after {
    position: absolute;
    content: '';
    width: 0;
    height: 0;
    border: 10px solid transparent;
    border-top-color: var(--tooltip-color);
    left: calc(50% - 10px);
    bottom: calc(100% + var(--gap-between-tooltip-to-button) - 10px);
}

.button::after,
.button::before {
    opacity: 0;
    visibility: hidden;
    transition: all 0.5s;
}

.text {
    display: flex;
    align-items: center;
    justify-content: center;
}

.button-wrapper,
.text,
.icon {
    overflow: hidden;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    color: #fff;
}

.text {
    top: 0
}

.text,
.icon {
    transition: top 0.5s;
}

.icon {
    color: #fff;
    top: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.icon svg {
    width: 24px;
    height: 24px;
}

.button:hover {
    background: #6c18ff;
}

.button:hover .text {
    top: -100%;
}

.button:hover .icon {
    top: 0;
}

.button:hover:before,
.button:hover:after {
    opacity: 1;
    visibility: visible;
}

.button:hover:after {
    bottom: calc(var(--height) + var(--gap-between-tooltip-to-button) - 20px);
}

.button:hover:before {
    bottom: calc(var(--height) + var(--gap-between-tooltip-to-button));
}
</style>
