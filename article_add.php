

  <h1> Ajouter un article </h1>
  <form class="was-validated" action="article_save.php?choix=2" method="post" enctype='multipart/form-data'>
      <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Titre Article</label>
      <input type="text" class="form-control" name="titre" id="validationTooltip01" placeholder="Titre article" value="" required>
      <div class="valid-tooltip">
      Excellent!
      </div>
    </div>
  <div class="mb-3">
    <label for="validationTextarea">Contenu de l'article</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" name="contenu" required></textarea>
    <div class="invalid-feedback">
      Veuillez saisir l'article
    </div>
  </div>

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
