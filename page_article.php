
<?php
require 'header.php';
if (isset($_GET['id'])){
  require 'connexion.php';
  $sql = 'select * from `article` where `ID_article`='.$_GET["id"];
        foreach  ($conn->query($sql) as $row) {
      // print_r($row);
      ?>
  <div class="row">
    <div class="col-3">
    <?php require 'sidebar.php';?>
    </div>
    <div class="col-9">
     <form class='was-validated' action='article_alter.php' method='post'>
        <div class='col-md-4 mb-3'>
        <label for='validationTooltip01'>Titre Article</label>
        <input type='hidden' class='form-control' name='ID'   value='<?= $row['ID_article']; ?>' >
        <input type='text' class='form-control' name='titre'  value='<?= $row['titre']; ?>' >
        </div>
        <div class='mb-3'>
        <label for='validationTextarea'>Contenu de l'article</label>
        <textarea class='form-control is-invalid' id='validationTextarea' placeholder='Required example textarea' name='contenu'  required><?= $row['contenu']; ?></textarea>
        </div>
        <div class='mb-3 '>
        <img src="upload/<?= $row['image']; ?>">
        </div>
      <input type='file'
          class='filepond'
          name='filepond'
          multiple
          data-max-file-size='3MB'
          data-max-files='3' required>
          <div class='invalid-feedback'>Example invalid custom file feedback</div>
          <div class='form-group'>
          <div class='col-sm-offset-2 col-sm-10'>
          <button type='submit' class='btn btn-default'>Modifier</button>
      </div>
    </div>
  </form>
</div>
</div>
  <?php
  }
}
require 'footer.php';
?>
