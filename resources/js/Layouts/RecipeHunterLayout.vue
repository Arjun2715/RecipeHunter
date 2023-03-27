<script setup></script>

<template>
  <Header
      class="bg-gradient-to-r from-blue-700 via-indigo-700 to-blue-700 w-full text-center py-4"
  >
      <h1 class="text-white font-bold text-4xl">Kinsta Blog</h1>
  </Header>

  <main class="container mx-auto text-center">
      <slot />
  </main>

  <footer
      class="bg-gradient-to-b from-transparent to-gray-300 w-full text-center mt-5 py-10 mx-auto"
  >
      <h2 class="font-bold text-xl pb-5">Join our Newsletter</h2>

      <input
          class="rounded-xl w-80 h-12 px-3 py-2 shadow-md"
          type="email"
          placeholder="Write your email.."
      />
  </footer>
</template>