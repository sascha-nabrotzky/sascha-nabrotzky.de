<script setup>
function blur(event) {
  event.target.classList.add("blur");
}
function unblur(event) {
  event.target.classList.remove("blur");
}
</script>

<template>
  <h1 @mouseenter="blur" @mouseleave="unblur">
    <slot name="title"></slot>
  </h1>
</template>

<style scoped>
.blur {
  filter: blur(8px);
}
</style>
