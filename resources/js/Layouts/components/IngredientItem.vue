<template>
    <li class="flex flex-row ">
        <label class="containercheck" >
            <input :checked="isChecked" type="checkbox" >
            <div class="checkmark"></div>
        </label>
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
        }
    }
}
</script>
<style>
li{
    height: 30px;
}
</style>