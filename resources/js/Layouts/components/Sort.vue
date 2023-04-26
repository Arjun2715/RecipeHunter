<template>
    <li class="flex flex-row">
    <label class="containercheck">
      <input :checked="isChecked" type="radio" :name="group" @change="onRadioChange">
      <div class="checkmark"></div>
    </label>
    <label class="p-0" :for="id">{{ SortType }}</label>
  </li>
</template>
<script>
export default {
    name: 'Sort',
    props: {
        SortType: {
      type: String,
      required: true,
    },
    group: {
      type: String,
      required: true,
    },
    isChecked: {
      type: Boolean,
      default: false,
    },
    id: {
      type: String,
      required: true,
    },
    },
    methods: {
    onRadioChange(event) {
      this.$emit("change", event.target.value);
    },
  },
    
}

</script>
<style>
li{
    height: 30px;
}
</style>