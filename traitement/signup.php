<?php
  include '../class/utilisateur.class.php';
  if(isset($_POST['mail'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];
    if($pwd == $pwd2){
      $user =  new user();
      $resultat = $user->inscription($nom,$prenom,$mail,md5($pwd));
      if($resultat == 'true'){
        $user->connexion($mail,$pwd);
      }else{
        echo 'erreur!';
      }
    }else{
      echo "mot de passe non identique ($pwd =/= $pwd2)";
    }
  }
?>
