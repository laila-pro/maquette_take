<h2> Liste des articles <h2>
<table class="table table-sm table1">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Contenu</th>
      <th scope="col">Auteur</th>
      <th scope="col">Date</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
<?php
    require 'connexion.php';
    $sql="SELECT * FROM `article`";
      foreach  ($conn->query($sql) as $row) {
    print "<td>".$row['titre'] . "</td>";
    print  "<td>".$row['contenu'] . "</td>";
    print "<td>".$row['auteur'] . "</td>";
    print "<td>".$row['date'] . "</td>";
    print "<td>".$row['image'] . "</td>";
     // echo "<td>" "<input class="form-check-input" type="radio" name="modifier" id="exampleRadios1" value="option1" checked>"  "<td>" ;
     echo "</tr>";

   "</tbody>";
  }

?>
</table>
    <!--
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr> -->

<!-- <div class="row d-flex justify-content-around"> -->


<!-- // echo '<div class="col-12 ">';
//   print $row['titre'];
//   print  $row['contenu'];
//   print $row['auteur'];
//   print $row['contenu'];
//   print '<input type="button" class="btn btn-primary" value="Editer" href="#">';
//   print '<input type="button" value="Modifier" href="#">';
//   print '<input type="button" value="Supprimer" href="#">';
// echo '</div>';
}
// echo '</div>'; -->
