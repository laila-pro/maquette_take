

<?php
require 'connexion.php';

$sql="SELECT * FROM `article`";

?>

<div class="row">
<?php
foreach  ($conn->query($sql) as $row) {
echo '<div class="col-12 ">';
  print $row['titre'];
  print  $row['contenu'];
  print $row['auteur'];
  print $row['contenu'];
  print '<input type="bouton" value="Modifier" href="#">';
  print '<input type="bouton" value="Editer" href="#">';
  print '<input type="bouton" value="Modifier" href="#">';
echo '</div>';
}
echo '</div>';

?>
