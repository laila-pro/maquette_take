

<!DOCTYPE html>
<html>
<head>
    <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>RECHRCHE</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="backoffice.css">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
</head>

<body>
  <?php include 'sidebar.php';?>
<div  id="AJOUTER" class="container">
  <h1> Ajouter un article </h1>
  <form class="was-validated" action="connexion.php" method="post">
      <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Titre Article</label>
      <input type="text" class="form-control" name="titre" id="validationTooltip01" placeholder="Titre article" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  <div class="mb-3">
    <label for="validationTextarea">Contenu de l'article</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" name="contenu" required></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
  </div>

  <!-- <div class="form-group">
    <select class="custom-select" required>
      <option value="">Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div> -->

  <!-- <div class="custom-file"> -->
    <!-- <input type="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div> -->
    <input type="file"
        class="filepond"
        name="filepond"
        multiple
        data-max-file-size="3MB"
        data-max-files="3" required>
        <label >Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
  <!-- </div> -->
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enregistrer</button>
    </div>
  </div>
</form>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
</body>
</html>
