<script setup>
import Navigation from "./components/Navigation.vue";
import Footer from "./components/Footer.vue";
import { RouterView } from "vue-router";
</script>

<template>
  <header>
    <img alt="Vue logo" class="logo mb-2 mt-2" src="@/assets/logo.svg" />
    <Navigation />
  </header>
  <RouterView />
  <Footer />
</template>

<style>
@import "@/assets/main.css";
</style>
