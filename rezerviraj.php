<?php
    if (isset($_POST["datum"])) {
        require ('baza.php');

        session_start();
        $datum=$_POST["datum"];
        $id=$_POST["id"];
        $sql="INSERT INTO rezervacija (KorisnikId,datumPreuzimanja,autoId) VALUES (".$_SESSION["id"].",'".$datum."',".$id.")";
        echo($sql);
        $result = $con->query($sql);
        header("Location: index.php");
    }
    else{
        echo("else");
    }
?>