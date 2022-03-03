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

    <div class="wrapper">
      <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/about">About</RouterLink>
        <RouterLink to="/javascript">JavaScript</RouterLink>
      </nav>
    </div>
  </header>

  <RouterView />
</template>

<style>
@import "@/assets/main.css";

header {
  display: flex;
  flex-flow: column;
  align-items: center;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  padding-top: 2rem;
}

nav a {
  margin-inline: 10px;
  color: var(--clr-green);
}

main {
  margin-top: 15rem;
  max-width: var(--max-width);
  text-align: center;
}
</style>
