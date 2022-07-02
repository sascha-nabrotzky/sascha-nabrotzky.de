<script setup>
import { RouterLink, RouterView } from "vue-router";
</script>
<template>
  <nav class="mt-05 mb-2">
    <RouterLink to="/">Home</RouterLink>
    <RouterLink to="/about">About</RouterLink>
    <RouterLink to="/javascript">JavaScript</RouterLink>
  </nav>

  <RouterView />
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
