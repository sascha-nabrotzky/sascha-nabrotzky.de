<script setup>
import TextNormal from "../components/TextNormal.vue";
</script>

<template>
  <main>
    <h1>Charakter-Design</h1>
    <TextNormal>
      <template #subtitle
        >Hier findest du demnächst meine Charakter-Design Projekte</template
      >
      <template #text>
        Keine Ahnung, was hier im Moment schreiben soll. Wenn ich mich für ein
        passendes Bildformat für den Slider entschieden habe, dann kommen hier
        noch mehr Bilder hin.
      </template>
    </TextNormal>
    <div class="image-right">
      <img src="@/images/Theo.jpg" />
    </div>
  </main>
</template>
