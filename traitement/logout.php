<?php
session_start();
include '../class/utilisateur.class.php';
$user =  new user();
$user->deconnexion();
$_SESSION['message'] = 'Déconnexion effectuée avec succès';
header('location: /air2/index.php');
?>
