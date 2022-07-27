<script setup>
import TextNormal from "../components/TextNormal.vue";
</script>

<template>
  <main>
    <h1>Über mich</h1>
    <TextNormal>
      <template #subtitle>Ääääh, hm ...</template>
      <template #text>
        wie so viele kreative Menschen, habe auch ich seit kindesalter meine
        Zeichenstifte nie so richtig aus der Hand gelegt, später konnte ich in
        meiner Ausbildung das Kreative mit dem Computer verbinden.
      </template>
    </TextNormal>
    <div class="image-right">
      <img src="@/assets/images/Neantertalerjunge.jpg" />
    </div>
  </main>
</template>
