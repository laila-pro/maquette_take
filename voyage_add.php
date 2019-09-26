<h1> Ajouter un voyage </h1>
<form class="was-validated" action="voyage_save.php" method="post">
    <div class="col-md-4 mb-3">
    <label for="validationTooltip01">Titre voyage</label>
    <input type="text" class="form-control" name="titre" id="validationTooltip01" placeholder="Titre article" value="" required>
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationTooltip02">tag</label>
    <input type="text" class="form-control" name="tag" id="validationTooltip02" placeholder="Titre article" value="" required>
  </div>
    <div class="col-md-4 mb-3">
    <label for="validationTooltip03">prix</label>
    <input type="text" class="form-control" name="prix" id="validationTooltip03" placeholder="Titre article" value="" required>
  </div>
<div class="col-md-4  mb-3">
  <label for="validationTextarea">Contenu du voyage</label>
  <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" name="contenu" required></textarea>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Enregistrer</button>
  </div>
</div>
</form>
