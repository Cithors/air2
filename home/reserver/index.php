<?php
if(!isset($_COOKIE['id_client'])){
  header('location: ../../');
}
session_start();
include("../../include/navbar5.php");
?>
<!DOCTYPE html>
<html>
<!--head-->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>LOOKTRIP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
<link rel="stylesheet" type="text/css" href="../../test.css?<?php echo rand(); ?>">
<script src="main.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<!--END head-->
<body> <!--background-->


  <style>
    body {
      background: url("../../img/rechercher.png?<?= rand(); ?>"); no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      background-position: top 100px;
    }
  </style>

<br><br><ul>
<!--3 animate buttons-->
<!--<li><a href="voiture/"><i class="fa fa-car" aria-hidden="true"></i></a></li>-->
<li><a href="avion/"><i class="fa fa-plane" aria-hidden="true"></i></a></li>
<li><a href="hotel/"><i class="fa fa-hotel" aria-hidden="true"></i></a></li>
</ul>
</body>
</html>
