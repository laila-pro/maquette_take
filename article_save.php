
<?php
$file = $_FILES['filepond'];
require 'connexion.php';
$tab = array(
  'titre' => $_POST['titre'],
  'contenu' => $_POST['contenu'],
  'image'=>$file["name"]);

//création de la requête SQL:
$sql = 'INSERT INTO `article` (`titre`, `contenu`, `image`, `auteur`, `date`) VALUES ("'.$tab["contenu"].'", "'.$tab["titre"].'","'.$tab["image"].'","test",CURDATE());';
move_uploaded_file($file["tmp_name"], './upload/' .$file["name"]);
// echo $sql;
$conn->exec($sql);
header('Location: admin.php?choix=0');
?>
