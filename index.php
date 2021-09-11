<?php require('nav.php')?>

<?php
	require ('baza.php');
	function generateRandomString() {
	return rand(0,10000000);
}
	
	if(!isset($_SESSION["idSesija"]))
	{
		$idSesija=generateRandomString();
		//echo($idSesija);
		$_SESSION["idSesija"]=$idSesija;
		echo($idSesija."test");
	}
?>
<body>
<style>
.fit-image{
width: 100%;
object-fit: cover;
height: 300px; 
}
</style>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>
	<div class="container">
	<div class="row">
    <div class="col-sm-9">
		<?php
            $sql="select * from auto";
			$result = $con->query($sql);

			
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		
		// echo ('
		// <form method="POST" action="rezerviraj.php">

		// 	  <div class="col-sm-3">
    	// 	<div class="thumbnail">
		// 		<img src="uploads/'.$row["slika"].'" alt="slika" class="img-responsive" width = "100%" ></div>

        //             <p>Ime: '.$row["naziv"].'</p>
		// 			<p>Model: '.$row["model"].'
		// 			<h4> Cijena: '.$row["cijena"].'</h4>
		// 			<input placeholder="unesite datum" type="text" class="form-control" name="datum"/>
		// 			<input placeholder=" " type="text" class="hidden" name="id" value='.$row["id"].'>

		// 			<button class="btn btn-primary" role="button">Dodaj</button>
		// 		</div>
		// </form>

		// ');
		echo('
		<form method="POST" action="rezerviraj.php">
		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="car-wrap rounded ftco-animate fadeInUp ftco-animated">
    					<div class="img rounded d-flex align-items-end" style="background-image: url(uploads/'.$row["slika"].');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="">'.$row["naziv"].'</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">'.$row["model"].'</span>
	    						<p class="price ml-auto">'.$row["cijena"].' KM<span>/dan</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><button  class="btn btn-primary py-2 mr-1">Book now</button>
							<input placeholder="datum" type="text" class="form-control" name="datum"/>
							<input placeholder="" type="hidden" class="hidden" name="id" value='.$row["id"].'>
    					</div>
    				</div>
    			</div>
				</form>
		');
	}
} else {
    echo "0 results";
}
		?>
			

	</div>

                    </div>
                </div>
            </div>
    </aside>
	</div>

<?php require('footer.php')?>
</html>
