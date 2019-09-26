<?php require 'header.php';?>
<div class="row">
<<<<<<< HEAD
<div class="col-3">
<?php require 'sidebar.php';?>
</div>
<div class="col-9">
<?php if (isset($_GET['voir']))
require 'article_add.php';
?>
</div>
=======
  <div class="col-3">
  <?php require 'sidebar.php';?>
  </div>
  <div class="col-9">
  <?php if (isset($_GET['voir']))
  require 'article.php';
  ?>
  </div>
>>>>>>> 28066ce3ddf89f74adff40a5561d483e2d29ab84
</div>
<?php
require 'footer.php';
?>
