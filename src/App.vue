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
      <a href="#">Sociallink1</a>
      <a href="#">Sociallink2</a>
      <a href="#">Sociallink3</a>
    </nav>
  </footer>
</template>

<style>
@import "@/assets/main.css";

header,
footer {
  display: flex;
  align-items: center;
  padding: 1rem;
}

header {
  flex-flow: column;
}

footer {
  justify-content: center;
}

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
