<h2> Liste des articles <h2>
<table class="table table-sm table1">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Contenu</th>
      <th scope="col">Auteur</th>
      <th scope="col">Date</th>
      <th scope="col">Image</th>
      <th scope="col">action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
<?php

    require 'connexion.php';
    $sql="SELECT * FROM `article`";
      foreach  ($conn->query($sql) as $row) {
        $id=0;
    print "<td>".$row['titre'] . "</td>";
    print  "<td>".$row['contenu'] . "</td>";
    print "<td>".$row['auteur'] . "</td>";
    print "<td>".$row['date'] . "</td>";
    print "<td>".$row['image'] . "</td>";
    echo  '<td><a href="page_article.php?id='.$row['ID_article'].'">',"Modif",' </a></td>';
echo  '<td><a href="article_delete.php?id='.$row['ID_article'].'">',"Supp",' </a></td>';
     // echo "<td>" "<input class="form-check-input" type="radio" name="modifier" id="exampleRadios1" value="option1" checked>"  "<td>" ;
     echo "</tr>";

  }

?>

</tbody>
</table>
