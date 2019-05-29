<?php
  include '../class/utilisateur.class.php';
  if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $user =  new user();
    $user->connexion($mail, $pwd);
  }
?>
