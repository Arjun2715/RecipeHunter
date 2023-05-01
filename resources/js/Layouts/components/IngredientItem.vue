<template>
    <li class="flex flex-row ">
        <label v-if="checkBox == true" class="containercheck" >
            <input :checked="isChecked" type="checkbox" >
            <div class="checkmark"></div>
        </label>
        <label v-if="bullets == true">&#x2022;</label>
        <label v-if="counter == true">1</label>
        <label class="p-0" for="Item1">
            {{  Ingredient }}
        </label>
    </li>
</template>
<script>
export default {
    name: 'IngredientItem',
    props: {
        Ingredient: {
            type: String,
            requried: true,
        },
        isChecked: {
            type :Boolean,
            default: false,
        },
        checkBox: true,
        bullets: false,
        counter: false,
    }
}
</script>
<style>
li{
    height: 30px;
}
</style>