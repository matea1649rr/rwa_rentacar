<?php
    require ('baza.php');
    // require('nav.php'); 
?>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">

<?php
$sql = "SELECT * from auto";
$result = $con->query($sql);

?>


<div class="container">
  <h2>Auta</h2>
  <a href="dodajAuto.php" class="btn btn-info">Dodajte auto </a> <a href="index.php">Naslovna</a>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Naziv</th>
      </tr>
    </thead>
    <tbody>
    <?php
        if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo("<tr>"
            .
            "<td>".$row["id"]."</td>"
            .
            "<td>".$row["naziv"]."</td>"
            
            
        );
        echo("<td><a name='izbrisi' href='izbrisiauto.php?id=".$row["id"]."'> <span class='glyphicon glyphicon-remove'></a></span></td>");
        echo("<td><a name='uredi' href='urediauto.php?id=".$row["id"]."'> <span class='glyphicon glyphicon-pencil'></a></span></td>");
        echo("</tr>");
    }
}
    ?>
    </tbody>
</table>

<?php require('footer.php')?>
