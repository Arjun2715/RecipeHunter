<template>
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
      <div class="container px-4 mx-auto flex  items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
          <a class="text-xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-gray-500"
            href="#">Recipe Hunter</a>
        </div>
        <div class="flex px-2 ">
            <router-link to="/login"
              class="btn  w-30 rounded-l-full btn-active  bg-gradient-to-r from-lemon to-green border-none shadow hover:shadow-lg " 
              @click="goToLogin">
              Login
            </router-link>
            <router-link to="register" 
             class="btn w-30 rounded-r-full shadow  hover:shadow-lg"
             @click="goToSignup">
             Sign Up
            </router-link>
          </div>
        <!-- <div class="flex px-2">
          <template v-if="$route.name == 'login'">
            <a href="#"
              class="btn w-30 rounded-l-full btn-active bg-gradient-to-r from-lemon to-green border-none shadow hover:shadow-lg">Login</a>
            <a href="#" class="btn w-30 rounded-r-full shadow hover:shadow-lg">Sign Up</a>
          </template>
          <template v-else>
            <a href="#" class="btn w-30 rounded-l-full border-none shadow hover:shadow-lg">Login</a>
            <a href="#"
              class="btn w-30 btn-active bg-gradient-to-r from-lemon to-green rounded-r-full shadow hover:shadow-lg">SignUp</a>
          </template>
        </div> -->
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
    },
    goToLogin() {
        this.$router.push('/login')
      },
      goToSignup() {
        this.$router.push('/register')
      }
  }
  </script>