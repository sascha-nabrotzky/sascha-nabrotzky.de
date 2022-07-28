<script setup></script>

<template>
  <footer class="mt-1">
    <nav>
      <a
        href="https://sascha-nabrotzky.github.io"
        target="_blank"
        title="Zu meiner GitHub-Website"
        ><img src="@/assets/www-globe_white.svg"
      /></a>
      <a
        href="https://www.instagram.com/sascha_nabrotzky"
        target="_blank"
        title="Zu meinem Instagram-Account"
        ><img src="@/assets/instagram-logo_e6e6e6.svg"
      /></a>
    </nav>
  </footer>
</template>

<style scoped>
footer {
  display: flex;
  justify-content: center;
  padding: 1rem;
}

nav {
  display: flex;
  align-items: center;
}

a {
  margin-inline: 20px;
}

a:hover img {
  opacity: 0.5;
}

a > img {
  height: 30px;
  aspect-ratio: 1/1;
  transition: var(--eff-trans);
}
</style>
