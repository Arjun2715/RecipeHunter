<script setup>
import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
  defineProps({
    articles: Object,
  });
</script>

<template>
  <RecipeHunterLayout>
    <section>
      // Looping over articles
      <article v-for="article in articles" :key="article.id">

        <h3>{{article.title}}</h3>
        <p>{{article.excerpt}}</p>

        <a href="#">Read more</a>
      </article>
    </section>
  </RecipeHunterLayout>
 </template>
