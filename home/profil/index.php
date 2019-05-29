<?php
if(!isset($_COOKIE['id_client'])){
  header('location: ../../');
}
session_start();
include("../../include/navbar7.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body><br><br><br><br><br><br><br><br><br><br><br>
<center>
  </body>
</html>
<?php

    if(!isset($_COOKIE['id_client'])){
        header('location: /air2/');
    }else{
        include '../../class/utilisateur.class.php';
        $u = new user();
        $u->profil();
        echo '
        </table>
        </div>
        </fieldset>';
    }
?>
<style>
  body {
    background: url("../../img/profil.png?<?= rand(); ?>"); no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: top 100px;
  }
</style>
