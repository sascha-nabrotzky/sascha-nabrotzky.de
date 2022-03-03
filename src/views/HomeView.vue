<script setup>
import Component1 from "../components/Component1.vue";
import Introtext from "../components/Introtext.vue";
</script>

<template>
  <main>
    <h1>Home</h1>
    <Introtext>
      <template #subtitle />
    </Introtext>

    <Component1 />
  </main>
</template>
