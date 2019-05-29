<?php
if(!isset($_COOKIE['id_client'])){
  header('location: ../../../');
}
session_start();
include("../../../include/navbar6.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--HEAD-->
  <head>

    <meta charset="utf-8">
    <link rel="icon" href="img/JUMELLE.png">
    <link rel="stylesheet" href="style.css?<?= rand(); ?>">
    <title>LOOKTRIP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	  <link type="text/css" rel="stylesheet" href="../../../css/style2.css?<?= rand(); ?>" />
    <link type="text/css" rel="stylesheet" href="../../../css/style.css?<?= rand(); ?>" />


    </head>

    <body>
      <!--hotel reserved form-->
    	<div id="booking" class="section">
    		<div class="section-center">
    			<div class="container">
    				<div class="row">
    					<div class="booking-form center-block">
    						<div class="form-header" style="padding-bottom: 10px;">
                  <a style="text-decoration: none;"><i class="fas fa-2x fa-hotel" style="color:#fff;"></i> Trouver un hôtel</a>
    						</div>
    						<form action="<?=$_SERVER['PHP_SELF'];?>" method="post"> <!--formulaire de recherche d'un hôtel-->
    							<div class="form-group">
    								<input class="form-control" type="text" placeholder="Marseille, Colombie, Auvergne..." name="ville">
    								<span class="form-label">Ville de recherche</span>
    							</div>
    							<div class="row">
    								<div class="col-md-6">
    									<div class="form-group">
    										<input class="form-control" type="date" name="datedep" required>
    										<span class="form-label">Départ</span>
    									</div>
    								</div>
    								<div class="col-md-6">
    									<div class="form-group">
    										<input class="form-control" type="date" name="datearr" required>
    										<span class="form-label">Retour</span>
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
    </body>
    </html>
  </head>


  </body>
</html>
<?php
if(isset($_POST['ville'])){
    $ville = ucfirst(strtolower($_POST['ville']));
    $datedep = $_POST['datedep'];
    $datedep = explode('-',$datedep);
    $datedep = $datedep[2]."-".$datedep[1]."-".$datedep[0];
    $datearr = $_POST['datearr'];
    $datearr = explode('-',$datearr);
    $datearr = $datearr[2]."-".$datearr[1]."-".$datearr[0];
    $nbadultes = $_POST['nbadultes'];
    $nbenfants = $_POST['nbenfants'];

    include '../../../class/hotel.class.php';
    $hote = new hotel();
    $requete = $hote->searchvd($ville);
    echo '

    <br><br><meta charset="utf-8"/>
    <table class="table table-dark col-md-5 right">
<thead>
<tr class="bg-info">
  <th scope="col">Id hôtel</th>
  <th scope="col">Nom</th>
  <th scope="col">Ville</th>
  <th scope="col">Que faire ?</th>
</tr>
</thead>
<tbody>  ';
      foreach($requete as $tableau){
          $ref = strtoupper(substr($tableau['ville'], 0, 3)).$tableau['id'];
          $tab = $ref.";".$datedep.";".$datearr.";".$nbadultes.";".$nbenfants;
          echo '
          <tr>
            <td>'.$tableau['id'].'</td>
            <td>'.$tableau['nom'].'</td>
            <td>'.$tableau['ville'].'</td>
            <td>
              <form action="/air2/home/reserver/hotel/valider" method="get">
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
