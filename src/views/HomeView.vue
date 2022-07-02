<script setup>
import Component1 from "../components/Component1.vue";
import TextNormal from "../components/TextNormal.vue";
</script>

<template>
  <main>
    <h1>Home</h1>
    <div>
      <TextNormal>
        <template #subtitle>Testseite für JavaScript und Vue</template>
        <template #text
          >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
          nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
          sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
          rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
          ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
          sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
          dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
          et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
          takimata sanctus est Lorem ipsum dolor sit amet.</template
        >
      </TextNormal>
    </div>
    <Component1 />
  </main>
</template>
