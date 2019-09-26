<?php
require 'connexion.php';
$tab = array(
':titre' => $_POST['titre'],
':contenu' => $_POST['contenu'],);

//création de la requête SQL:

$sql = "INSERT INTO `article` (titre, contenu)
 VALUES (:titre, :contenu,)";

echo "$sql";
$conn->exec($sql);

echo "New record created successfully";
?>
