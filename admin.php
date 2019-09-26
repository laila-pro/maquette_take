<?php require 'header.php';?>
<div class="row">
<div class="col-3">
<?php require 'sidebar.php';?>
</div>
  <div class="col-9">
    <?php
    //if (isset($_GET['voir']))
    // require 'article_add.php';
    ?>
    <?php
    if (isset($_GET['choix'])) {
      switch ($_GET['choix']){
        case 1:
        require 'article_add.php';
        break;
        case 0:
        echo "Article ajouté avec succès";
        break;
        case 3:
        require 'article_alter.php';

        default:
        break;
        }
        }

    ?>
  </div>
</div>
<?php
require 'footer.php';
?>
