<?php
    require ('baza.php');
    session_start();
    if($_SESSION["uloga"]=="admin"){
        $id=$_GET["id"];
        $sql="DELETE FROM auto WHERE id=".$id;
        $result = $con->query($sql);
        header("Location: auta.php");
    }


?>
