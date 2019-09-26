<!-- <?php var_dump($_GET); ?> -->
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
    <div class="header ">
      <div class="container">
        <div class="row p-5">
          <div class="logo col-auto mr-auto">
            <a href="#">
              <img src="img/logo.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="article col-9 text-center">
          <?php
            $sql =  'SELECT * FROM `article` WHERE `ID_article`='.$_GET["id"];
            foreach  ($conn->query($sql) as $row) {
              $exerpt = substr($row['contenu'], 0, 200). " ...";
               print "
                  <div class='col-9 text-center'>
                    <img src='".$row['image']."'class='' alt='...'>
                    <div class='card-body'>
                     <h5 class='card-title'>" . $row['titre'] . "</h5>
                     <p class='card-text'>". $exerpt."</p>
                     <p class='card-text'><small class='text-muted'>". $row['auteur'] . "</small></p>
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
