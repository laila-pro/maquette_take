  <h1> Ajouter un article </h1>
  <form class="was-validated" action="article_save.php" method="post">

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
      Invalide.
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
