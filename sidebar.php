<?php
?>
<!DOCTYPE html>
<html>
<head>
    <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>RECHRCHE</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="backoffice.css">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
<div id="content">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Maquette take</h3>
        </div>

        <ul class="list-unstyled components">
            <p>BACK-OFFICE</p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">ARTICLE</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="article.php">Ajouter</a>
                    </li>
                    <li>
                        <a href="#">Modifier</a>
                    </li>
                    <li>
                        <a href="#">Supprimer</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#voyageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Voyage</a>
                <ul class="collapse list-unstyled" id="voyageSubmenu">
                    <li>
                        <a href="#">Ajouter</a>
                    </li>
                    <li>
                        <a href="#">Modifier</a>
                    </li>
                    <li>
                        <a href="#">Supprimer</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">UTILISATEUR</a>
                <ul class="collapse list-unstyled" id="userSubmenu">
                    <li>
                        <a href="#">Ajouter</a>
                    </li>
                    <li>
                        <a href="#">Modifier</a>
                    </li>
                    <li>
                        <a href="#">Supprimer</a>
                    </li>
                </ul>
            </li>
            </ul>
    </nav>

</div>
</div>
</nav>
<div  id="ar-AJOUTER" class="container">
  <h1> Ajouter un article </h1>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Titre Article</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="choose" name="choose">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>







    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>
