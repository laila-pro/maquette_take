<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="author" lang="fr" content="Solange Harmonie PICARD, Antoni SALOMON, Laila Provost, Sylvain Espina, Erwann Le Gall">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAKE</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
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
  <header class="header min-vh-100">
    <div class="container">
      <div class="row">
        <div class="logo col-auto mr-auto">
          <a href="#">
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


    <div class="container title text-white" id="titlepic">
      <h1 id="picperf">Picture perfect</h1>
      <p id="pictext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </header>

  <section class="projects">
    <article class="container">
      <div class="container px-lg-5">
        <h2 class="pt-5 mb-4">Start something new</h2>
        <div style="font-size:14px;" class="row mx-lg-n5">
          <div class="col py-3 px-lg-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
              unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            <p>eaque ipsa quae ab illo inventore veritatis et beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
          </div>
          <div class="col py-3 px-lg-5">
            <img src="img/ipone.png" alt="ipone" id="ipone">
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
          </div>
        </div>
      </div>
    </article>
  </section>

  <!--harmo : side-by-side gallery-->
  <section class="pt-5 pl-5 pr-5">
    <article class="patchwork text-light">
      <div id="cards-right" class="row">
        <div class="line1 row">
          <div class="design col-md-3 p-3">
            <h3>Design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button type="button" class="btn btn-primary custom-btn btn-sm">Find Out More &rarr;</button>
          </div>
          <div class="built col-md-3 p-3">
            <h3>Built to last</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button type="button" class="btn btn-primary custom-btn btn-sm">Find Out More &rarr;</button>
          </div>
          <div class="clients col-md-3 p-3">
            <h3>Our clients</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button type="button" class="btn btn-primary custom-btn btn-sm">Find Out More &rarr;</button>
          </div>
          <div class="great col-md-3 p-3">
            <h3>How to shoow great</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button type="button" class="btn btn-primary custom-btn btn-sm">Find Out More &rarr;</button>
          </div>
        </div>
        <div class="line2 row">
          <div class="sign_up col-md-6 p-3">
            <h3>Sign up & see why</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button type="button" class="btn btn-primary custom-btn btn-sm">Find Out More &rarr;</button>
          </div>
          <div class="pictures col-md-3 p-3">
            <h3>Perfect pictures</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button type="button" class="btn btn-primary custom-btn btn-sm">Find Out More &rarr;</button>
          </div>
          <div class="something_new col-md-3 p-3">
            <h3>Start something new</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button type="button" class="btn btn-primary custom-btn btn-sm">Find Out More &rarr;</button>
          </div>
        </div>
      </div>
    </article>

    <article class="details container p-5">
      <h2>A look at details</h2>
      <div class="small_articles row">
        <?php
          $sql =  'SELECT * FROM `article` ORDER BY `ID_ARTICLE` DESC LIMIT 3';

          foreach  ($conn->query($sql) as $row) {
            $exerpt = substr($row['contenu'], 0, 200). " ...";
             print "
                <div class='card web col-md-3 pt-3 m-3' style='width: 18rem;'>
                  <a href='article.php?id=" . $row['ID_article'] . "'>
                    <img src='upload/".$row['image']."'class='card-img-top' alt='...'>                    <div class='card-body'>
                     <h5 class='card-title'>" . $row['titre'] . "</h5>
                     <p class='card-text'>". $exerpt."</p>
                     <p class='card-text'><small class='text-muted'>". $row['auteur'] . "</small></p>
                    </div>
                  </a>
                </div>

            ";
          }
        ?>
      </div>
    </article>
  </section>

  <section class="second-box min-vh-100">
    <article class="container d-flex flex-column align-content-center">
      <div class="row flex-grow-1 d-flex align-items-end">
        <div class="col-12 col-md-4" id="bottom-position">
          <h2 class="text-white display-4">More power <br> behind every pixel.</h2>
          <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <button type="button" class="btn btn-primary custom-btn btn-sm">Find Out More &rarr;</button>
        </div>
      </div>
    </article>
  </section>

  <section class="information p-5">
    <article class="reasons container p-3">
      <h3 class="text-white pt-5 pb-4">Reasons to get onbaord</h3>
      <div class="row d-flex align-items-end">
        <aside class="web_based col-md-4 text-white pt-4 pb-4">
          <h4>Web based</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </aside>
        <aside class="team col-md-4 text-white pt-4 pb-4">
          <h4>Team login</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </aside>
        <aside class="support col-md-4 text-white pt-4 pb-4">
          <h4>Great support</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </aside>
      </div>
    </article>
  </section>

  <!-- Anto Products col-->
  <section class="products">
    <div class="container">
      <div class="row cardsp p-5">
        <?php
          $product =  'SELECT * FROM `voyage` ORDER BY `ID_voyage` DESC LIMIT 2';

          foreach  ($conn->query($product) as $row) {
            print "
              <div class='nocolor col-5 m-4'>

                  <span class='purple-bg'>" . $row['tag'] . "</span>
                  <h2 class='solo1 pt-3'>". $row['titre']."</h2>
                  <p class='solo2'>". $row['contenu'] . "</p>
                  <button type='button' id='gbut' class='btn btn-success'>Buy now $".$row['prix'] . "</button>

              </div>
             ";
          };
        ?>
      </div>
    </div>
  </section>

  <!--FOOTER -->
  <footer class="end">
    <div class="blabla container">
      <div class="row d-flex pt-5">
        <div class="left col-md-6 pb-5 pl-2">
          <div class="get_in_touch text-white align-items-center pt-5">
            <h4 class="pb-4">Get in touch</h4>
            <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
              ex ea commodo consequat.</p>
          </div>
          <div class="us row pt-4">
            <aside class="resources text-white col-md-4">
              <h5>Resources</h5>
              <div class="contents pt-3 d-flex flex-column">
                <a href="#" class="text-white">Tour</a>
                <a href="#" class="text-white">Customers</a>
                <a href="#" class="text-white">Pricing and Plans</a>
                <a href="#" class="text-white">New Features</a>
                <a href="#" class="text-white">Education</a>
              </div>

            </aside>
            <aside class="features text-white col-md-4">
              <h5>Features</h5>
              <div class="contents pt-3 d-flex flex-column">
                <a href="#" class="text-white">Tour</a>
                <a href="#" class="text-white">Customers</a>
                <a href="#" class="text-white">Pricing and Plans</a>
                <a href="#" class="text-white">New Features</a>
                <a href="#" class="text-white">Education</a>
              </div>
            </aside>
            <aside class="how_to text-white col-md-4">
              <h5>How To's</h5>
              <div class="contents pt-3 d-flex flex-column">
                <a href="#" class="text-white">Tour</a>
                <a href="#" class="text-white">Customers</a>
                <a href="#" class="text-white">Pricing and Plans</a>
                <a href="#" class="text-white">New Features</a>
                <a href="#" class="text-white">Education</a>
              </div>
            </aside>
          </div>
        </div>

        <div class="right col-sm-12 col-md-6">
          <div class="form pt-5">
            <h4 class="text-white pb-4">Stay in touch</h4>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="username" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn" type="button" id="button-addon2"><i class="fas fa-check text-white"></i></button>
              </div>
            </div>
            <p class="spam_info text-secondary">We don't send spam. Actually, who are we kiding, we'll spam the shit out of your inbox</p>
          </div>

          <div class="made_by text-white pt-5">
            <p>Free Template by FreeTemplates.pro</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://kit.fontawesome.com/6fee70888d.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="script.js"></script>

</body>

</html>
