<?php
    // require('nav.php');
?>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
<h1>Dodajte auto</h1>
<a href="auta.php">Nazad na auta</a>
<form action="dodajpost.php" method="post" enctype="multipart/form-data">
<div class="container">

	<div class="row">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Naziv" aria-describedby="basic-addon1" name="ime">
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control" placeholder="Unesite cijenu u KM" name="cijena">
        <span class="input-group-addon">.00</span>

        
    </div>
    <br>
    <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="model" name="model">
        </div>
    <br>
    <div class="input-group">
     <input type="file" name="file" id="file"><br>
    </div>
    <br>
<button class="btn btn-info" type="submit">Dodaj</button>
</form>
</div>

