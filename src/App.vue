<script setup>
import Navigation from "./components/Navigation.vue";
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
    <Navigation />
  </header>

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
