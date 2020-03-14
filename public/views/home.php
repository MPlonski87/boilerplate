<?php @include(__DIR__ . '/components/' . '_header.php'); ?>

<main class="block">
  <div class="block__element">
    <h1>Boilerplate</h1>
  </div>
</main>

<section>
  <h2>Flexboxgrid</h3>
  <div class="row">
    <div class="col-md-3">
      <p>col-md-3</p>
    </div>
    <div class="col-md-3">
      <p>col-md-3</p>
    </div>
    <div class="col-md-3">
      <p>col-md-3</p>
    </div>
    <div class="col-md-3">
      <p>col-md-3</p>
    </div>
  </div>
</section>

<section id="app">
  <h2>Vue.js</h3>
  <div class="row">
    <p>
      {{ message }}
    </p>
  </div>
</section>

<?php @include(__DIR__ . '/components/' . '_footer.php'); ?>