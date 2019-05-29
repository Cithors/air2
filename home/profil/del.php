<?php
    if(!isset($_POST['tab'])){
        header('location: index.php');
    }else{
        if(isset($_COOKIE['id_client'])){
            include '../../class/utilisateur.class.php';
            $sup = new user();
            $sup->delreservation($_POST['tab']);
        }
    }
?>