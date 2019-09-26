<?php
var_dump($_POST);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "take";

try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $tab = array(
':titre' => $_POST['titre'],
':contenu' => $_POST['contenu'],);

//création de la requête SQL:

$sql = "INSERT INTO `article` (titre, contenu)
		VALUES (:titre, :contenu,)";

echo "$sql";
$conn->exec($sql);

echo "New record created successfully";
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
