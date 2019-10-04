<?php
require 'connexion.php';
$tab = array(
  'titre' => $_POST['titre'],
  'tag' => $_POST['tag'],
  'prix' => $_POST['prix'],
  'contenu' => $_POST['contenu']

);

$sql = 'INSERT INTO `voyage` (`tag`, `titre`, `contenu`, `prix`, `date`) VALUES ("'.$tab["tag"].'", "'.$tab["titre"].'","'.$tab["contenu"].'","'.$tab["prix"].'", CURDATE());';

echo $sql;
$conn->exec($sql);

echo "New record created successfully";
        header('Location: admin.php?trip=0'); /* Redirection du navigateur */
?>
