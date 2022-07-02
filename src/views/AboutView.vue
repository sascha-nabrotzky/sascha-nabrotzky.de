<template>
  <main>
    <h1>This is an about page</h1>
    <div class="about">
      <p>
        <strong>With a random Photo </strong>Lorem ipsum dolor sit amet,
        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
        accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
        sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor
        sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
        gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
      </p>
    </div>
    <div class="image-right">
      <img src="https://picsum.photos/800/800" />
    </div>
  </main>
</template>

<style>
.image-right {
  max-height: 600px;
  overflow: hidden;
}

.image-right img {
  width: 100%;
}

@media screen and (min-width: 769px) {
  .image-right {
    grid-column: 3 / 5;
  }
}
</style>
