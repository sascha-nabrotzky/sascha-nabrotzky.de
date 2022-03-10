<script setup>
import { RouterLink, RouterView } from "vue-router";
</script>

<template>
  <header>
    <img
      alt="Vue logo"
      class="logo"
      src="@/assets/logo.svg"
      width="125"
      height="125"
    />

    <nav class="mt-05 mb-2">
      <RouterLink to="/">Home</RouterLink>
      <RouterLink to="/about">About</RouterLink>
      <RouterLink to="/javascript">JavaScript</RouterLink>
    </nav>
  </header>

  <RouterView />

  <footer class="mt-1">
    <nav>
      <a href="https://sascha-nabrotzky.github.io" target="_blank">Porfolio</a>
      <a href="#">Sociallink2</a>
      <a href="#">Sociallink3</a>
    </nav>
  </footer>
</template>

<style>
@import "@/assets/main.css";
</style>
