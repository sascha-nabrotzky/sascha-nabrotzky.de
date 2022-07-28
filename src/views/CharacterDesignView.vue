<script setup>
import TextNormal from "../components/TextNormal.vue";
import Headline from "../components/Headline.vue";
</script>

<template>
  <main>
    <Headline>
      <template #title>Charakter-Design</template>
    </Headline>
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
      <img src="@/assets/images/Theo.jpg" />
    </div>
  </main>
</template>
