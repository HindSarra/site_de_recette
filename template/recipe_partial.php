<div class="col-md-4">
  <img src="<?= _RECIPES_IMG_PATH_ . $recipe['image']
            ?>" class="card-img-top" alt=<?= $recipe['title'] ?>>
  <div class="card-body">
    <h5 class="card-title"><?= $recipe['title'] ?></h5>
    <p class="card-text"><?php echo $recipe['description'] ?></p>
    <a href="recette.php?id=<?= $key; ?>" class="btn btn-primary">Voir la recette</a>
  </div>
</div>