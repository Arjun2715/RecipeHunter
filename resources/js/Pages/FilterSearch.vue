<script scope>
import Footer from "../Layouts/components/Footer.vue";
import Header from "../Layouts/components/Header.vue";
import IngredientItem from "../Layouts/components/IngredientItem.vue";
import "vue3-carousel/dist/carousel.css";
import { InertiaProgress } from "@inertiajs/progress";
export default {
    props: {
        data: Object,
    },
    components: {
        Header,
        Footer,
        IngredientItem,
    },
    data() {
        return {
            search: "",
            valueH: 0,
            valueM: 0,
            ingredients: [
                "Tomatoes",
                "Basil",
                "Garlic",
                "green bell pepper",
                "white onion",
                "feta cheese",
                "Olive Oil",
            ],
            newIngredient: "",
            selectedIngredient: [],
            selectedCuisines: [],
            selectedDiet: [],
            selectedSort: [],
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
            diets: [
                "Vegan",
                "Gluten Free",
                "Primal",
                "Vegetarian",
                "Whole30",
                "Paleo",
            ],
        };
    },
    computed: {
        capitalizeFirstLetter() {
            return function (string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            };
        },
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
        addDiet() {
            if (this.newDiet) {
                this.diets.push(this.newDiet);
                this.newDiet = "";
            }
        },
        sort() { },
        selectIngredient(item, index) {
            if (this.selectedIngredient.includes(item)) {
                // If the ingredient is already selected, remove it
                this.selectedIngredient = this.selectedIngredient.filter(
                    (i) => i !== index
                );
            } else {
                // Otherwise, add it to the selected array
                this.selectedIngredient.push(item);
            }
        },
        selectCuisines(item, index) {
            if (this.selectedCuisines.includes(item)) {
                // If the ingredient is already selected, remove it
                this.selectedCuisines = this.selectedCuisines.filter(
                    (i) => i !== index
                );
            } else {
                // Otherwise, add it to the selected array
                this.selectedCuisines.push(item);
            }
        },
        selectDiet(item, index) {
            if (this.selectedDiet.includes(item)) {
                // If the ingredient is already selected, remove it
                this.selectedDiet = this.selectedDiet.filter(
                    (i) => i !== index
                );
            } else {
                // Otherwise, add it to the selected array
                this.selectedDiet.push(item);
            }
        },
        selectSort(item, index) {
            if (this.selectedSort.includes(item)) {
                // If the ingredient is already selected, remove it
                this.selectedSort = this.selectedSort.filter(
                    (i) => i !== index
                );
            } else {
                // Otherwise, add it to the selected array
                this.selectedSort.push(item);
            }
        },
        resetFilter() {
            console.log(
                (this.selectedIngredient = []),
                (this.selectedCuisines = []),
                (this.selectedDiet = []),
                (this.selectedSort = []),
                (this.valueH = 0),
                (this.valueM = 0)
            );
        },
        filterd() {
            console.log(this.selectedIngredient);
            console.log(this.selectedCuisines);
            console.log(this.selectedDiet);
            console.log(this.selectedSort);
            console.log(this.valueH);
            console.log(this.valueM);
            console.log(this.search);
        },
    },
};
InertiaProgress.init();
</script>
<template>
    <Header />
    <div class="flex flex-col mt-20">
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
                                    <svg aria-hidden="true"
                                        class="w-5 h-5 text-gray-800 focus:text-lemon dark:text-gray-200 hover:text-gray-800"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="voice-search" v-model="search"
                                    class="bg-gradient-to-r from-lemon-40 outline-none to-green-40 border-2 border-gray-300 text-gray-900 text-sm rounded-full focus:ring-lemon focus:border-lemon w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-white dark:text-white dark:focus:ring-lemon"
                                    placeholder="Search... " />
                            </div>
                        </div>
                        <div class="grow flex-1 dropdown dropdown-end py-1">
                            <input v-model="newIngredient" input="text" tabindex="0"
                                class="btn w-full inline-flex placeholder-black text-center pl-5 py-2.5 px-3 text-sm font-medium bg-green border-none rounded-full bo border-lemon hover:bg-green-80"
                                placeholder="Ingredients" />

                            <a class="absolute right-0 text-2xl  outline-none border-none rounded-full text-gray-100 dark:text-gray-100 btn btn-primary"
                                @click="addIngredient">
                                +
                            </a>

                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-full grid grid-cols-1">
                                <IngredientItem v-for="(ingredient, index) in ingredients" :key="index"
                                    @click="selectIngredient(ingredient, index)" :Ingredient="ingredient"
                                    :checkBox="true" />
                            </ul>
                        </div>
                        <div class="grow flex-1 dropdown dropdown-end py-1">
                            <input v-model="newCuisines" input="text" tabindex="0"
                                class="btn w-full inline-flex placeholder-black text-center pl-5 py-2.5 px-3 text-sm font-medium text-gray-800 dark:text-white bg-green border-none rounded-full bo border-lemon hover:bg-green-80"
                                placeholder="Cuisine" />
                            <a class="absolute right-0  text-2xl outline-none border-none rounded-full btn btn-primary text-gray-100 dark:text-gray-100"
                                @click="addCuisines">+</a>
                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-full grid grid-cols-1">
                                <IngredientItem v-for="(ingredient, index) in cuisines" :key="index"
                                    @click="selectCuisines(ingredient, index)" :Ingredient="ingredient" :checkBox="true" />
                            </ul>
                        </div>
                        <div class="grow flex-1 dropdown dropdown-end py-1">
                            <input v-model="newDiet" input="text" tabindex="0"
                                class="btn w-full inline-flex placeholder-black text-center pl-5 py-2.5 px-3 text-sm font-medium text-gray-800 dark:text-white bg-green border-none rounded-full bo border-lemon hover:bg-green-80"
                                placeholder="Diet" />
                            <a class="absolute right-0 border-none outline-none rounded-full btn btn-primary text-2xl text-gray-100 dark:text-gray-100"
                                @click="addDiet">+</a>
                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-full grid grid-cols-1">
                                <IngredientItem v-for="(ingredient, index) in diets" :key="index"
                                    @click="selectDiet(ingredient, index)" :Ingredient="ingredient" :checkBox="true" />
                            </ul>
                        </div>

                        <div class="grow flex-1 dropdown dropdown-end py-1">
                            <label tabindex="0"
                                class="btn w-full inline-flex items-center py-2.5 px-3 text-sm font-medium text-gray-900 bg-green border-none rounded-full  border-lemon hover:bg-green-80">
                                <span></span>
                                Prep. Time
                            </label>
                            <div
                                class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-auto">
                                <input id="rangeSlider" type="range" class="form-range" v-model="valueM" min="5" max="59"
                                    step="" />
                                <label for="rangeSlider" class="sliderValue">
                                    Minutes: {{ valueM }} m
                                </label>
                                <input id="rangeSlider" type="range" class="form-range" v-model="valueH" min="0" max="23"
                                    step="" />
                                <label for="rangeSlider" class="sliderValue">
                                    Hours: {{ valueH }} h
                                </label>
                            </div>
                        </div>
                        <div class="grow flex-1 dropdown dropdown-end py-1">
                            <label tabindex="0"
                                class="btn w-full inline-flex text-center py-2.5 px-3 text-sm font-medium text-gray-900 bg-green border-none rounded-full border-lemon hover:bg-green-80"
                                placeholder="">Sort</label>
                            <!-- <a class=" absolute right-0 bg-gra dient-to-r from-lemon border-none to-green rounded-full  btn btn-primary text-gray-800"
                                >Add</a> -->

                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white dark:bg-gray-600 dark:text-white rounded-box w-full grid grid-cols-1">
                                <IngredientItem v-for="(ingredient, index) in sort" :key="index" :Ingredient="ingredient"
                                    @click="selectSort(ingredient, index)" :checkBox="true" />
                            </ul>
                        </div>
                        <div class="grow flex-1 h-full py-1">
                            <Link
                                class="btn w-full h-full inline-flex items-center py-2.5 px-3 text-sm font-medium text-gray-800 dark:text-white bg-gradient-to-r from-lemon to-green border-none rounded-full border border-lemon hover:bg-lemon focus:ring-4 focus:outline-none focus:ring-lemon-60 dark:hover: dark:focus:ring-lemon-60"
                                href="/filter" method="post" as="button" type="button" @click="resetFilter()" :data="{
                                        ingredients: this.selectedIngredient,
                                        cuisines: this.selectedCuisines,
                                        diets: this.selectedDiet,
                                        sort: this.selectedSort,
                                        hour: this.valueH,
                                        minute: this.valueM,
                                        query: this.search,
                                    }">Filter
                            </Link>
                        </div>
                    </div>
                    <!-- </form> -->
                    <div class="h-auto ">
                        <!--search info cards here -->
                        <div class="flex flex-row justify-center  " v-if="data.recipes.data == null">
                            <div class="text-center items-center p-20">
                                <div class="flex flex-row justify-center ">
                                    <img class="w-auto h-20" src="assets/images/search.png" alt="">

                                </div>
                                <label class="font-bold text-xl text-gray-800 dark:text-white">No Result's Found</label>
                                <p class="text-gray-700 dark:text-white">We're sorry what you were looking for. Please <br>
                                    try another way</p>
                            </div>


                        </div>
                        <div v-else
                            class="mb-20 py-2 grid lg:grid-cols-3 lg:items-center md:grid md:grid-cols-2 md:items-center grid-cols-1 items-center w-full h-full">
                            <div v-for="item in data.recipes.data" class="flex-1 m-2 dark:text-white">
                                <Link href="/viewrecipe" meathod="get" as="button" type="button"
                                    :data="{ recipeId: item.id }">
                                <div class="w-full h-full rounded-[18px] shadow-md hover:shadow-xl">
                                    <div class="card card-side bg-white dark:bg-gray-600 h-52 overflow-hidden">
                                        <img class="object-cover" :src="item.image" alt="Recipe Image here :(" style="
                                                    width: 200px;
                                                " />
                                        <div class="card-body p-2 overflow-visible">
                                            <h2 class="card-title text-gray-800 dark:text-white text-lg text-left">
                                                {{ item.title }}
                                            </h2>
                                            <div class="flex flex-row justify-start">
                                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M6.85665 2.30447C8.2922 2.16896 10.3981 2 12 2C13.6019 2 15.7078 2.16896 17.1433 2.30447C18.4976 2.4323 19.549 3.51015 19.6498 4.85178C19.7924 6.74918 20 9.90785 20 12.2367C20 14.022 19.8781 16.2915 19.7575 18.1035C19.697 19.0119 19.6365 19.8097 19.5911 20.3806C19.5685 20.6661 19.5496 20.8949 19.5363 21.0526L19.5209 21.234L19.5154 21.2966L19.5153 21.2976C19.5153 21.2977 19.5153 21.2977 18.7441 21.2308L19.5153 21.2976C19.4927 21.5553 19.3412 21.7845 19.1122 21.9075C18.8831 22.0305 18.6072 22.0309 18.3779 21.9085L12.1221 18.5713C12.0458 18.5307 11.9542 18.5307 11.8779 18.5713L5.62213 21.9085C5.39277 22.0309 5.11687 22.0305 4.88784 21.9075C4.65881 21.7845 4.50732 21.5554 4.48466 21.2977L5.25591 21.2308C4.48466 21.2977 4.48467 21.2978 4.48466 21.2977L4.47913 21.234L4.46371 21.0526C4.45045 20.8949 4.43154 20.6661 4.40885 20.3806C4.3635 19.8097 4.30303 19.0119 4.24255 18.1035C4.12191 16.2915 4 14.022 4 12.2367C4 9.90785 4.20763 6.74918 4.3502 4.85178C4.45102 3.51015 5.50236 2.4323 6.85665 2.30447ZM5.93179 19.9971L11.1455 17.2159C11.6791 16.9312 12.3209 16.9312 12.8545 17.2159L18.0682 19.9971C18.1101 19.4598 18.1613 18.7707 18.2124 18.0019C18.3327 16.1962 18.4516 13.9687 18.4516 12.2367C18.4516 9.97099 18.2482 6.86326 18.1057 4.96632C18.0606 4.366 17.5938 3.89237 16.9969 3.83603C15.5651 3.70088 13.5225 3.53846 12 3.53846C10.4775 3.53846 8.43487 3.70088 7.00309 3.83603C6.40624 3.89237 5.9394 4.366 5.89429 4.96632C5.75175 6.86326 5.54839 9.97099 5.54839 12.2367C5.54839 13.9687 5.66734 16.1962 5.78756 18.0019C5.83874 18.7707 5.88993 19.4598 5.93179 19.9971Z"
                                                            fill="#e5a50a"></path>
                                                </svg>
                                            </div>
                                            <div class="card-actions justify-start">
                                                <div class="flex flex-row">
                                                    <div v-for="tag in item.tags" class="flex flex-wrap justify-around">
                                                        <div class="whitespace-nowrap mr-2">
                                                            <label
                                                                class="relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] before:bottom-0 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer before:hover:scale-x-100 before:scale-x-0 before:origin-top-left before:transition before:ease-in-out before:duration-300">
                                                                {{
                                                                    capitalizeFirstLetter(
                                                                        tag
                                                                    )
                                                                }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label
                                                class="text-gray-800 dark:text-white h-fit text-sm text-left overflow-y-scroll">
                                                {{ item.description }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                </Link>
                            </div>

                        </div>
                        <!-- {{ this.data.recipes.links }} -->
                        <!-- 
                                <div class="flex flex-row justify-center pagination w-full">

                                <div class="btn-group">
                                    <button  class="btn">
                                        <a
                                            v-if="this.data.recipes.links.first"
                                            :href="
                                                this.data.recipes.links.first
                                            "
                                            @click.prevent="
                                                this.$inertia.visit(
                                                    this.data.recipes.links
                                                        .first
                                                )
                                            "
                                            class="pagination-link"
                                        >
                                        First
                                        </a>
                                    </button>
                                    <button v-if="this.data.recipes.links.prev != null" class="btn">
                                        <a
                                            v-if="this.data.recipes.links.prev"
                                            :href="
                                                this.data.recipes.links.prev
                                            "
                                            @click.prevent="
                                                this.$inertia.visit(
                                                    this.data.recipes.links
                                                        .prev
                                                )
                                            "
                                            class="pagination-link"
                                        >
                                        «
                                        </a>
                                    </button>
                                    <button class="btn disabled">
                                        <span class="pagination-current"
                                            >
                                            {{
                                                this.data.recipes.meta
                                                    .current_page
                                            }}</span
                                        >
                                    </button>
                                    <button v-if="this.data.recipes.links.next != null" class="btn">
                                        <a
                                            v-if="this.data.recipes.links.next"
                                            :href="
                                                this.data.recipes.links.next
                                            "
                                            @click.prevent="
                                                this.$inertia.visit(
                                                    this.data.recipes.links
                                                        .next
                                                )
                                            "
                                            class="pagination-link"
                                        >
                                        »
                                        </a></button>
                                        <button v-if="this.data.recipes.links.last" class="btn">
                                        <a
                                            v-if="this.data.recipes.links.last"
                                            :href="
                                                this.data.recipes.links.last
                                            "
                                            @click.prevent="
                                                this.$inertia.visit(
                                                    this.data.recipes.links
                                                        .last
                                                )
                                            "
                                            class="pagination-link"
                                        >
                                        Last
                                        </a>
                                    </button>
                                </div> -->

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
</style>
