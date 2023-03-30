<script setup>
import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
  defineProps({
    articles: Object,
  });
</script>

<template>
  <RecipeHunterLayout>
    <h2 class="text-2xl font-bold py-10">Read our latest articles</h2>
<!-- 
    <section class="space-y-5 border-b-2 pb-10">
      <article
        v-for="article in articles"
        :key="article.id"
        class="flex justify-center items-center shadow-md bg-white rounded-xl p-4 mx-auto max-w-3xl"
      >

         <img
            src="/images/kinsta-logo.png"
            class="w-32 h-32 rounded-xl object-cover"
            alt=""
         />

        <div class="flex flex-col text-left justify-between pl-3 space-y-5">
          <h3
            class="text-xl font-semibold text-indigo-600 hover:text-indigo-800"
          >
            <a href="#">{{ article.title }}</a>
          </h3>
          <p>
           {{ article.excerpt }}
          </p>
          <a
            href="#"
            class="text-indigo-600 hover:text-indigo-800 w-fit self-end font-semibold"
            >Read more</a
          >
        </div>
      </article>
    </section> -->
  </RecipeHunterLayout>
 </template>
