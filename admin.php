<?php require 'header.php';?>
<div class="row">
<div class="col-3">
<?php require 'sidebar.php';?>
</div>
  <div class="col-9">
    <?php
    require 'article_edit.php';
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
        require 'article_edit.php';

        default:
        break;
        }
      }else if (isset($_GET['trip'])){
        switch ($_GET['trip']){
          case 1:
          require 'voyage_add.php';
          break;
          case 0:
          echo "Voyage ajouté avec succès";
          break;

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
