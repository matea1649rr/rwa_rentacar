<?php 
  session_start();
?>
<html lang="en">

  <head>
    <title>Rent a car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">

            <?php
           echo('<li class ="nav-item"><a class="nav-link" href="https://drive.google.com/file/d/1iIDNvRdnH4ED65SrrXT5VmmpsgmIAxF8/view">Vizija</a>' );
           echo('<li class ="nav-item"><a class="nav-link" href="onama.php">O nama</a>' );

            if(isset($_SESSION["email"]))
            { 
              if ($_SESSION["uloga"]=="admin")
              {
                echo('<li class="nav-item"><a class="nav-link" href="auta.php">auta</a></li>');
              }   
              echo('<li class="nav-item"><a class="nav-link" href="#" >Prijavljeni ste kao '.$_SESSION["email"].'</a></li>');
              echo('<li class="nav-item"><a class="nav-link" href="logout.php">Odjava</a></li>');

              echo('<li class="nav-item"><a class="nav-link" href="rezervacije.php">Rezervacije</a></li>');

            }
            

            else{

              echo('<li class="nav-item"><a class="nav-link" href="registracija.php">Registracija</a></li>');
              echo('<li class="nav-item"><a class="nav-link" href="prijava.php">Prijava</a></li>');
              echo('<li class="nav-item"><a class="nav-link" href= >Prijavljeni ste kao gost</a></li>');
            }
            
          ?>
	        </ul>
	      </div>
	    </div>
	  </nav>