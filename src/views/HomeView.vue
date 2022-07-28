<script setup>
import TextNormal from "../components/TextNormal.vue";
import BaerBuch from "@/assets/images/BaerAbenteuerBuch.jpg";
import Headline from "../components/Headline.vue";
</script>

<template>
  <main>
    <Headline>
      <template #title>Illustration & Charakter-Design</template>
    </Headline>
    <TextNormal>
      <template #subtitle>Hallo!</template>
      <template #text>
        Neben meinem Hauptjob als Web-Entwickler habe ich noch eine weitere
        Leidenschaft und zwar Charakter-Design und Illustration, welches ich als
        Hobby betreibe, wenn ich etwas Zeit freischaffen kann oder um den Kopf
        frei zu bekommen. Diese Website habe ich zu Übungszwecken erstellt, um
        mich in <strong>"Vue 3"</strong> und selbst erstellten
        <strong>CSS3-Design-Systemen</strong> einzuarbeiten und versuche
        gleichzeitig meine Illustrationen zu präsentieren. Wie so viele kreative
        Menschen, habe auch ich seit kindesalter meine Zeichenstifte nie so
        richtig aus der Hand gelegt, später konnte ich in meiner Ausbildung das
        Kreative mit dem Computer verbinden.
      </template>
    </TextNormal>
    <div class="image-right">
      <img :src="BaerBuch" />
    </div>
  </main>
</template>
