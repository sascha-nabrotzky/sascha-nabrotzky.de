<script setup>
import { RouterLink } from "vue-router";
</script>

<template>
  <nav class="mt-05 mb-2">
    <RouterLink to="/">Home</RouterLink>
    <RouterLink to="/about">About</RouterLink>
    <RouterLink to="/illustrationen">Illustrationen</RouterLink>
    <RouterLink to="/characterdesign">Charakter-Design</RouterLink>
  </nav>
</template>

<style>
/* nav styling is not scoped */
nav {
  display: flex;
  flex-wrap: wrap;
  row-gap: 0.5rem;
}

nav a {
  margin-inline: 10px;
  color: var(--clr-green);
}
</style>
