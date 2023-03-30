<template>
  <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
    <div class="container px-4 mx-auto flex  items-center justify-between">
      <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
        <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-gray-500"
          href="#">Recipe Hunter</a>
      </div>
      <div class="flex px-2 ">
          <button type=""
            class="btn  w-30 rounded-l-full btn-active  bg-gradient-to-r from-lemon to-green border-none shadow hover:shadow-lg ">Login</button>
          <button class="btn w-30 rounded-r-full shadow  hover:shadow-lg">Sigh Up</button>
        </div>
    </div>
  </nav>
</template>
<script>
export default {
  data() {
    return {
      showMenu: false
    }
  },
  methods: {
    toggleNavbar: function () {
      this.showMenu = !this.showMenu;
    }
  }
}
</script>