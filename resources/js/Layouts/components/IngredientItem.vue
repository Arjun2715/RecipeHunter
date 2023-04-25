<template>
    <li class="flex flex-row ">
        <label class="containercheck">
            <input :checked="checked" type="checkbox">
            <div class="checkmark"></div>
        </label>
        <lable class="p-0" for="Item1">
            {{  Ingredient }}
        </lable>
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
        checked: {
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