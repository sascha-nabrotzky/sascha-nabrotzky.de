<script setup>
import { ref } from "vue";

const count = ref(0);
const text = ref("Jetzt ist aber gut");
let seen = true;

function increment() {
  if (count.value <= 8) {
    count.value++;
  }
  if (count.value >= 8) {
    count.value = text.value;
  }
}

function decrement() {
  if (count.value > 0) {
    count.value--;
  }
}
</script>

<template>
  <section>
    <h2 class="number">{{ count }}</h2>
    <div>
      <button @click="decrement" class="btn btn-plumi">-</button>
      <button @click="increment" class="btn btn-plumi">+</button>
    </div>
    <h2 v-if="seen">v-if ist auf true</h2>
  </section>
</template>

<style scoped>
section {
  display: flex;
  flex-flow: column;
  align-items: center;
  text-align: center;
}
.number {
  font-size: 4rem;
  color: var(--clr-green);
}

.btn-plumi {
  width: 2rem;
  aspect-ratio: 1;
  padding: unset;
}
</style>
