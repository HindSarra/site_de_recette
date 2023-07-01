<?php
require_once('template/header.php');
require_once('lib/recipe.php');

?>


<!-- ma presentation du site -->

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <h1>Liste des recettes</h1>
</div>

<!-- mes card de recettes  -->

<div class="row">
  <?php
  foreach ($recipes as $key => $recipe) {
    include('template/recipe_partial.php');
  }  ?>
</div>
</div>
<!-- fin container -->
</div>
<!-- mon footer  -->
<?php
require_once('template/footer.php');
?>