<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Takes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  </head>
  <body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "take";

try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully";

echo "<div class='container'>
  <div class='row'>";

     $sql =  'SELECT * FROM `article` ORDER BY `publicationDate` DESC LIMIT 4';

      foreach  ($conn->query($sql) as $row) {
        print "
            <div class='card col-3 m-3 pt-3' style='width: 18rem;'>
              <img src='".$row['image']."'class='card-img-top' alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>" . $row['titre'] . "</h5>
                <p class='card-text'>". $row['contenu']."</p>
                <p class='card-text'><small class='text-muted'>". $row['publicationDate'] . "</small></p>
              </div>
            </div>
        ";

     }
echo "</div>
</div>";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
