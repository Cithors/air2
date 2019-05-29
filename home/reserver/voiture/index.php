<?php
if(!isset($_COOKIE['id_client'])){
  header('location: ../../../');
}
session_start();
include("../../../include/navbar2.php");
if(isset($_POST['lieu'])){
  $lieu = $_POST['lieu'];
  $date1 = $_POST['date1'];
  $date2 = $_POST['date2'];
  $nbadultes = $_POST['nbadultes'];
  $nbenfants = $_POST['nbenfants'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  include '../../../class/voiture.class.php';
  echo $date1;
  //voiture::reserver($lieu,$date1,$date2,$nbadultes,$nbenfants,$email,$phone);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/JUMELLE.png">
    <link rel="stylesheet" href="../../../style.css">
    <title>LOOKTRIP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
    <!DOCTYPE html>
    <html lang="en">

    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    	<title>Booking Form HTML Template</title>

    	<!-- Google font -->
    	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    	<!-- Bootstrap -->
    	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    	<!-- Custom stlylesheet -->
    	<link type="text/css" rel="stylesheet" href="../../../css/style2.css" />
      <link type="text/css" rel="stylesheet" href="../../../css/style.css" />


    </head>

    <body>
      <!--car reserved form-->
    	<div id="booking" class="section">
    		<div class="section-center">
    			<div class="container">
    				<div class="row">
    					<div class="booking-form center-block">
    						<div class="form-header" style="padding-bottom: 10px;">
                                 <a style="text-decoration: none;"><i class="fas fa-2x fa-car"></i> Trouver une location de voiture</a>
    						</div>
    						<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    							<div class="form-group">
    								<input class="form-control" type="text" name="lieu" placeholder="Marseille, Colombie, Auvergne...">
    								<span class="form-label">Lieu de prise en charge</span>
    							</div>
    							<div class="row">
    								<div class="col-md-6">
    									<div class="form-group">
    										<input class="form-control" type="date" name="date1" required>
    										<span class="form-label">Du</span>
    									</div>
    								</div>
    								<div class="col-md-6">
    									<div class="form-group">
    										<input class="form-control" type="date" name="date2" required>
    										<span class="form-label">Au</span>
    									</div>
    								</div>
    							</div>
    							<div class="row">
    								<div class="col-md-4">
    									<div class="form-group">
    										<select class="form-control" name="nbadultes" required>
    											<option value="" selected hidden>Nb d'adultes</option>
    											<option>1</option>
    											<option>2</option>
    											<option>3</option>
    										</select>
    										<span class="select-arrow"></span>
    										<span class="form-label">Adultes</span>
    									</div>
    								</div>
    								<div class="col-md-4">
    									<div class="form-group">
    										<select class="form-control" name="nbenfants" required>
    											<option value="" selected hidden>Nb d'enfants</option>
    											<option>0</option>
    											<option>1</option>
    											<option>2</option>
    										</select>
    										<span class="select-arrow"></span>
    										<span class="form-label">Enfants</span>
    									</div>
    								</div>
    							</div>
    							<div class="row">
    								<div class="col-md-6">
    									<div class="form-group">
    										<input class="form-control" type="email" name="email" placeholder="votre mail">
    										<span class="form-label">Email</span>
    									</div>
    								</div>
    								<div class="col-md-6">
    									<div class="form-group">
    										<input class="form-control" type="tel" name="phone" placeholder="votre numéro de téléphone">
    										<span class="form-label">Phone</span>
    									</div>
    								</div>
    							</div>
    							<div class="form-btn">
    								<button class="submit-btn">Rechercher</button>
    							</div>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

    	<script src="js/jquery.min.js"></script>
    	<script>
    		$('.form-control').each(function () {
    			floatedLabel($(this));
    		});

    		$('.form-control').on('input', function () {
    			floatedLabel($(this));
    		});

    		function floatedLabel(input) {
    			var $field = input.closest('.form-group');
    			if (input.val()) {
    				$field.addClass('input-not-empty');
    			} else {
    				$field.removeClass('input-not-empty');
    			}
    		}
    	</script>
    </body>
    </html>
