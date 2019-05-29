<?php

if(!isset($_COOKIE['id_client'])){
  header('location: ../../../');
}
include("../../../include/navbar6.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/JUMELLE.png">
    <link rel="stylesheet" href="style.css?<?php echo rand(); ?>">
    <title>LOOKTRIP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!DOCTYPE html>
    <html lang="en">

    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    	<!-- Bootstrap -->
    	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    	<!-- Custom stlylesheet -->
    	<link type="text/css" rel="stylesheet" href="../../../css/style2.css?<?php echo rand(); ?>" />
      <link type="text/css" rel="stylesheet" href="../../../css/style.css?<?php echo rand(); ?>" />


    </head>

    <body>
      <!--plane reserved form-->
    	<div id="booking" class="section">
    		<div class="section-center">
    			<div class="container">
    				<div class="row">
    					<div class="booking-form center-block">
    						<div class="form-header" style="padding-bottom: 10px;">
                                 <a style="text-decoration: none;"><i class="fas fa-2x fa-plane" style="color:#fff;"></i> Trouver un vol</a>
    						</div>
    						<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
									<div class="row">
    								<div class="col-md-6">
    									<div class="form-group">
    										<input class="form-control" type="text" name="villed" placeholder="Ville de départ" required>
    										<span class="form-label">Ville de départ</span>
    									</div>
    								</div>
    								<div class="col-md-6">
    									<div class="form-group">
    										<input class="form-control" type="text" name="villea" placeholder="Ville d'arrivée" required>
    										<span class="form-label">Ville d'arrivée</span>
    									</div>
    								</div>
    							</div>
    							<div class="row">
    								<div class="col-md-6">
    									<div class="form-group">
    										<input class="form-control" type="date" name="datedep" required>
    										<span class="form-label">Du</span>
    									</div>
    								</div>
    								<div class="col-md-6">
    									<div class="form-group">
    										<input class="form-control" type="date" name="datearr" required>
    										<span class="form-label">Au</span>
    									</div>
    								</div>
    							</div>
    							<div class="row">

    								<div class="col-md-6">
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
    								<div class="col-md-6">
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

    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

    </html>

  </head>

  </body>
</html>
<?php
if(isset($_POST['villea'])){
		$villea = ucfirst(strtolower($_POST['villea']));
		$villed = ucfirst(strtolower($_POST['villed']));
    $datedep = $_POST['datedep'];
    $datedep = explode('-',$datedep);
    $datedep = $datedep[2]."-".$datedep[1]."-".$datedep[0];
    $datearr = $_POST['datearr'];
    $datearr = explode('-',$datearr);
    $datearr = $datearr[2]."-".$datearr[1]."-".$datearr[0];
    $nbadultes = $_POST['nbadultes'];
    $nbenfants = $_POST['nbenfants'];

    include '../../../class/vol.class.php';
    $avion = new vol();
    $requete = $avion->searchvdva($villed,$villea);
    echo '
    <br><br><meta charset="utf-8"/>
    <table class="table table-dark col-md-5 right">
<thead>
<tr class="bg-info">
  <th scope="col">Numéro de vol</th>
  <th scope="col">Ville départ</th>
  <th scope="col">Ville arrivée</th>
  <th scope="col">Heure départ</th>
  <th scope="col">Heure arrivée</th>
  <th scope="col">Que faire ?</th>

</tr>
</thead>
<tbody>';
foreach($requete as $tableau){
    $ref = strtoupper(substr($tableau['ville_dep'], 0, 3)).strtoupper(substr($tableau['ville_arr'], 0, 3)).$tableau['numvol'];
    $tab = $ref.";".$datedep.";".$datearr.";".$nbadultes.";".$nbenfants;
    echo '
  <tr>
    <td>'.$tableau['numvol'].'</td>
    <td>'.$tableau['ville_dep'].'</td>
    <td>'.$tableau['ville_arr'].'</td>
    <td>'.$tableau['h_dep'].'</td>
    <td>'.$tableau['h_arr'].'</td>
    <td>
      <form action="/air2/home/reserver/avion/valider" method="get">
        <a>
        <button value="'.$tab.'" name="tab"  class="btn btn-info">Réserver</button>
        </a>
      </form>
    </td>
  </tr>
  ';
}

      }

?>
