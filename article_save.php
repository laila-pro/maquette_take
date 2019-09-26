
<?php
require 'connexion.php';
$tab = array(
'titre' => $_POST['titre'],
'contenu' => $_POST['contenu'],
'image'=>$_POST['filepond']);
//création de la requête SQL:
$sql = 'INSERT INTO `article` (`titre`, `contenu`, `image`, `auteur`, `date`) VALUES ("'.$tab["contenu"].'", "'.$tab["titre"].'","'.$tab["image"].'","test",CURDATE());';
// echo $sql;
$conn->exec($sql);
        header('Location: admin.php?choix=0');
?>
