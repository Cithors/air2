<?php
if(!isset($_COOKIE['id_client'])){
  header('location: ../');
}
session_start();
include("../include/navbar2.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--HEAD-->
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/JUMELLE.png">
    <link rel="stylesheet" href="style.css?<?php echo rand(); ?>">
    <link type="text/css" rel="stylesheet" href="css/style.css?<?php echo rand(); ?>" />
    <link type="text/css" rel="stylesheet" href="css/style2.css?<?php echo rand(); ?>" />
    <title>LOOKTRIP</title>
  </head><br><br>
<!--END HEAD-->


<style>
  body {
    background: url("../img/index.png?<?= rand(); ?>"); no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: top 100px;
  }
</style>



  </body>
</html>
