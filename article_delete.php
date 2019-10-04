<?php
require 'connexion.php';
//Modi de la requête SQL:

$sql = 'delete from article
where ID_article=' .$_GET["id"] ;
echo "suppression effectuée";
echo $sql;
// $conn->exec($sql);
//     header('Location: admin.php?choix=10');
?>
