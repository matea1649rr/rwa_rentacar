<?php
// require("nav.php");
require("baza.php");
session_start();
$sql="SELECT r.id as rid,a.naziv as aime,a.model as amodel,r.datumPreuzimanja as datum  from rezervacija r INNER JOIN korisnik as k on k.id=r.KorisnikId INNER JOIN auto as a on a.id=r.autoId where r.KorisnikId=".$_SESSION["id"]."";
$result = $con->query($sql);

?>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
<h1>Moje rezervacije</h1>
<a href="index.php">Naslovna</a>
<table class="table">
<thead>
      <tr>
        <th>Id</th>
        <th>Naziv</th>
        <th>Model</th>
        <th>Datum iznajmljivanja</th>
      </tr>
    </thead>
    <tbody> 
    <?php
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo("<tr>"
            .
            "<td>".$row["rid"]."</td>"
            ."<td>".$row["aime"]."</td>"
            ."<td>".$row["amodel"]."</td>"
            ."<td>".$row["datum"]."</td>"
        );
    }
}
    ?>
    </tbody>
</table>