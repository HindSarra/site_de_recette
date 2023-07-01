<?php
require_once('lib/recipe.php');
require_once('template/header.php');
?>


<!-- ma presentation du site -->

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <div class="col-10 col-sm-8 col-lg-6">
    <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Logo Cuisinea" loading="lazy" width="350">
  </div>
  <div class="col-lg-6">
    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisinea -Recette de cuisine</h1>
    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora, assumenda laudantium deleniti exercitationem eum, iste aliquid dolore cumque dolorem a ipsum molestias veritatis, nemo deserunt eveniet expedita aut iusto ipsam.</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <a href="recettes.php" class="btn btn-primary">Voir nos recettes </a>

    </div>
  </div>
</div>

<!-- mes card de recettes  -->

<div class="row">
  <?php
  foreach ($recipes as $key => $recipe) {
    include('template/recipe_partial.php');
  }
  ?>
</div>
</div>
<!-- fin container -->
</div>
<!-- mon footer  -->
<?php
require_once('template/footer.php');
?>