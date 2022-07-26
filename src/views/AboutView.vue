<script setup>
import TextNormal from "../components/TextNormal.vue";
</script>

<template>
  <main>
    <h1>Sascha Nabrotzky</h1>
    <TextNormal>
      <template #subtitle>Ääääh, hm ...</template>
      <template #text>
        Keine Ahnung, was hier im Moment schreiben soll.
      </template>
    </TextNormal>
    <div class="image-right">
      <img src="@/images/Neantertalerjunge.jpg" />
    </div>
  </main>
</template>
