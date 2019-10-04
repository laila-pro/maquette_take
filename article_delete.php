<?php
require 'connexion.php';
//Modi de la requête SQL:
$sql = 'DELETE FROM article WHERE `ID_article`='.$_GET["id"];
// $deleteuser = "DELETE FROM table2 WHERE first_name = 'Alfred' AND last_name = 'Hitchcock'";
$conn->exec($sql);
echo "suppression effectuée";
// echo $sql;
//     header('Location: admin.php?choix=10');
?>
