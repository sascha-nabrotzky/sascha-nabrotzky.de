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
  <h2 class="number">{{ count }}</h2>
  <button @click="decrement" class="btn-plumi">-</button>
  <button @click="increment" class="btn-plumi">+</button>
  <h2 v-if="seen">v-if ist auf true</h2>
</template>

<style>
.number {
  font-size: 4rem;
  color: var(--clr-green);
}

.btn-plumi {
  background-color: transparent;
  color: var(--clr-white);
  width: 2rem;
  aspect-ratio: 1;
  border: 1px solid var(--clr-white);
  margin: 1rem;
  cursor: pointer;
}
</style>
