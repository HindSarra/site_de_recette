<?php
require_once('template/header.php');
require_once('lib/tools.php');
require_once('lib/recipe.php');
require_once('lib/category.php');

$messages = [];
$errors = [];
$recipe = [
  'title' => '',
  'description' => '',
  'ingredients' => '',
  'instructions' => '',
  'category_id' => ''
];

$categories = getCategories($pdo);

if (isset($_POST['saveRecipe'])) {

  $fileName = null;

  if (isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] != '') {

    $checkImage = getimagesize($_FILES['file']['tmp_name']);

    if ($checkImage !== false) {
      //si on a une image 
      $fileName = uniqid() . '-' . slugify($_FILES['file']['name']);

      move_uploaded_file($_FILES['file']['tmp_name'], _RECIPES_IMG_PATH_ . $fileName);
    } else {

      //message d'error pas d'image;

      $errors[] = 'le message doit etre une image';
    }
  }
  if (!$errors) {
    $res = saveRecipe($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instructions'], $fileName);
    if ($res) {
      $messages[] = 'La recette a bien etait sauvgardée';
    } else {
      $errors[] = 'La recette n\'a pas etait sauvgarder';
    }
  }
  $recipe = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'ingredients' => $_POST['ingredients'],
    'instructions' => $_POST['instructions'],
    'category_id' => $_POST['category']
  ];
}





?>





<h1>Ajouter une recette </h1>
<?php foreach ($messages as $message) { ?>
  <div class="alert alert-success">
    <?= $message ?>
  </div>
<?php } ?>


<form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="<?= $recipe['title']; ?>">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea type="description" name="description" id="description" value="<?= $recipe['description']; ?>" cols="30" rows="5"></textarea>
  </div>

  <div class="mb-3">
    <label for="ingredients" class="form-label">Ingredients</label>
    <textarea type="ingredients" name="ingredients" id="ingredients" value="<?= $recipe['ingredients']; ?>" cols="30" rows="5"></textarea>
  </div>

  <div class="mb-3">
    <label for="Instructions" class="form-label">instructions</label>
    <textarea type="instructions" name="instructions" id="instructions" value="<?= $recipe['instructions']; ?>" cols="30" rows="5"></textarea>
  </div>

  <div class="mb-3">
    <label for="category" class="form-label">Catégorie</label>
    <select name="category" id="category" class="form-select">

      <?php foreach ($categories as $category) { ?>
        <option value="<?= $category['id']; ?>" <?php if ($recipe['category_id'] == $category['id']) {
                                                  echo 'selected="selected"';
                                                } ?>><?= $category['name']; ?></option>
      <?php } ?>

    </select>

  </div>
  <div class="mb-3">
    <label for="file">Image</label>
    <input type="file" name="file" id="image">
  </div>
  <input type="submit" value="Enregistrer" name="saveRecipe" class="btn btn-primary">
</form>


<?php
require_once('template/footer.php');
?>




<!-- <select name="category" id="category" class="form-select"> -->
</ /?php //foreach ($categoies as $category) {//?>

<!-- <option value="<//?=// $category['id']; ?//>" </?php //if ($recipe['category_id'] == $category['id']) { -->
//echo 'selected == "selected"';
// } ?//>>
// </ /?=//$category['nama'] ?/ />
<!-- // </option> -->
<!-- // <//?php//} ?//> -->
<!-- </select> -->