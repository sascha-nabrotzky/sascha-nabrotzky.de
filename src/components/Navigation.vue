<script setup>
import { RouterLink } from "vue-router";
</script>

<template>
  <nav class="mt-05 mb-2">
    <RouterLink to="/" title="Über mich">Über mich</RouterLink>
    <RouterLink to="/illustrationen" title="Illustrationen"
      >Illustrationen</RouterLink
    >
    <RouterLink to="/characterdesign" title="Character-Design"
      >Charakter-Design</RouterLink
    >
  </nav>
</template>

<style scoped>
nav {
  display: flex;
  flex-wrap: wrap;
  row-gap: 0.5rem;
}

nav a {
  margin-inline: 10px;
  color: var(--clr-gray);
  text-decoration: none;
  transition: var(--eff-trans);
}

nav a:hover {
  color: var(--clr-green);
}
</style>
