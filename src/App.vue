<script setup>
import Navigation from "./components/Navigation.vue";
import { RouterView } from "vue-router";
</script>

<template>
  <header>
    <img alt="Vue logo" class="logo mb-2 mt-2" src="@/assets/logo.svg" />
    <Navigation />
  </header>

  <RouterView />

  <footer class="mt-1">
    <nav>
      <a href="https://sascha-nabrotzky.github.io" target="_blank"
        >Web-Development</a
      >
      <a href="https://www.instagram.com/sascha_nabrotzky" target="_blank"
        >Instagram</a
      >
    </nav>
  </footer>
</template>

<style>
@import "@/assets/main.css";
</style>
