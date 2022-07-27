<script setup>
import TextNormal from "../components/TextNormal.vue";
import BaerBuch from "@/assets/images/BaerAbenteuerBuch.jpg";
</script>

<template>
  <main>
    <h1>Illustrationen und Charakter-Design</h1>
    <TextNormal>
      <template #subtitle>Hallo!</template>
      <template #text>
        Neben meinem Hauptjob als Web-Entwickler habe ich noch eine weitere
        Leidenschaft und zwar Charakter-Design und Illustration, welches ich als
        Hobby betreibe, wenn ich etwas Zeit freischaffen kann oder um den Kopf
        frei zu bekommen. Diese Website habe ich zu Übungszwecken erstellt, um
        mich in <strong>"Vue 3"</strong> einzuarbeiten und versuche gleichzeitig
        meine Illustrationen zu präsentieren. Aktuellste Zeichnungen findet man
        aber auf meinem Instagram-Account.
      </template>
    </TextNormal>
    <div class="image-right">
      <img :src="BaerBuch" />
    </div>
  </main>
</template>
