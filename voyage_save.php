<?php
require 'connexion.php';
$tab = array(
  'titre' => $_POST['titre'],
  'contenu' => $_POST['contenu'],
//création de la requête SQL:

$sql = 'INSERT INTO `article` (`titre`, `contenu`, `auteur`, `date`) VALUES ("'.$tab["contenu"].'", "'.$tab["titre"].'","'.$tab["image"].'","test",CURDATE());';

echo $sql;
$conn->exec($sql);

echo "New record created successfully";
?>
