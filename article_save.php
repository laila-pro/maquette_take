<?php
$result = move_uploaded_file ( $_FILES["filepond"]["tmp_name"] , "upload/". $_FILES["filepond"]["name"] );
if ($result) {
  require 'connexion.php';
  $tab = array(
    'titre' => $_POST['titre'],
    'contenu' => $_POST['contenu'],
    'image'=> $_FILES["filepond"]["name"] );
  //création de la requête SQL:
  $sql = 'INSERT INTO `article` (`titre`, `contenu`, `image`, `auteur`, `date`) VALUES ("'.$tab["titre"].'", "'.$tab["contenu"].'","'.$tab["image"].'","'.$tab["auteur"].'",CURDATE());';
  // echo $sql;
  $conn->exec($sql);
    header('Location: admin.php?choix=0');
}
else {
  echo "Le fichier n'a pu être téléchargé";
}
?>
