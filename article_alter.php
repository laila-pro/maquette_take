<?php
require 'connexion.php';
$tab = array(
  'ID'=>$_POST['ID'],
  'titre' => $_POST['titre'],
  'contenu' => $_POST['contenu'],
  'image'=>$_POST['filepond']
);
//Modi de la requête SQL:
$sql = 'update `article` set `titre`=" '.$tab['titre'].'"  , `contenu`=" '.$tab['contenu'].'"   , `image`=" ' .$tab['image'].'"
where ID_article='.$tab['ID'];
$conn->exec($sql);
    header('Location: admin.php?choix=10');
?>
