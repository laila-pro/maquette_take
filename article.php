
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" lang="fr" content="Solange Harmonie PICARD, Antoni SALOMON, Laila Provost, Sylvain Espina, Erwann Le Gall">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAKE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="article.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/logo.png">
    <!--googlefont-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- Connexion à la base de données -->
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
        echo "</div>
        </div>";
      }
      catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
      }
    ?>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="row p-5">
          <div class="logo col-auto mr-auto">
            <a href="./index.php">
              <img src="img/logo.png" alt="">
            </a>
          </div>
          <div class="login col-auto">
            <a href="login.php">
              <button type="button" class="btn btn-outline-info">Log In</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-md-center">
        <div class="article col p-5 my-5">
          <?php
            $sql =  'SELECT * FROM `article` WHERE `ID_article`='.$_GET["id"];
            foreach  ($conn->query($sql) as $row) {
               print "
                 <div class='container mb-5'>
                    <div class='row pb-5'>
                      <div class='col-md-6'>
                        <img src='".$row['image']."'class='rounded' alt='...'>
                      </div>
                      <div class='col-md-6 p-5'>
                        <h1 class='display-4'>" . $row['titre'] . "</h5>
                        <p class=''> Posted on ". $row['date'] ." by ". $row['auteur'] ."</p>
                      </div>
                    </div>
                    <div class='row'>
                      <p class='px-3'>". $row['contenu'] ."</p>
                    </div>
                 </div>
              ";
            }
          ?>
        </div>

      </div><!--row-->
    </div><!--container-->

  </body>
</html>
