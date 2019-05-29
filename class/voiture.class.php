<?php
  //a ajouter de toute urgence : id_client dans la base
  class voiture{

    public function reserver($localisation, $ddepart, $darrivee, $nbadultes, $nbenfants, $mail, $tel){
      $connexion =  new PDO('mysql:host=localhost;dbname=tour2control','root', ''); //connexion BDD
      $requete = $connexion->prepare('INSERT INTO car(location,ddepart,darrivee,nbadultes,nbenfants,mail,tel) VALUES (:l,:dd,:da,:nba,:nbe,:m,:t)'); //requete
      $resultat = $requete->execute(['l'=>$localisation,'dd'=>$ddepart,'da'=>$darrivee,'nba'=>$nbadultes,'nbe'=>$nbenfants,'m'=>$mail,'t'=>$tel]); //execution requete
    }

  }
?>
