<script setup>
import TextNormal from "../components/TextNormal.vue";
</script>

<template>
  <main>
    <h1>Illustrationen</h1>
    <TextNormal>
      <template #subtitle
        >Hier findest du demnächst meine Illustrationen</template
      >
      <template #text>
        Keine Ahnung, was hier im Moment schreiben soll. Wenn ich mich für ein
        passendes Bildformat für den Slider entschieden habe, dann kommen hier
        noch mehr Bilder hin.
      </template>
    </TextNormal>
    <div class="image-right">
      <img src="@/assets/images/Es_regnet_Hunde_und_Katzen.jpg" />
    </div>
  </main>
</template>
