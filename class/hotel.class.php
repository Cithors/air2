<?php
  class hotel{
    public function setBdd(){
      $obj = new PDO('mysql:host=localhost;dbname=tour2controle;','root','');
      return $obj;
    }

    public function liste(){
      $connexion = $this->setBdd();
      $requete = $connexion->query("SELECT * FROM hotel");
      $result = $requete->fetchall();
      return $result;
    }

    public function searchvd($ville){
      $connexion = $this->setBdd();
      $requete = $connexion->prepare("SELECT * FROM hotel WHERE ville=:ville");
      $result = $requete->execute(['ville'=>$ville]);
      $result = $requete->fetchall();
      return $result;
    }

    public function reserver($ref, $nba, $nbe, $dated, $datea){
        $connexion = $this->setBdd();
        $requete = $connexion->prepare('INSERT INTO reservation(ref,type,id_client,nbadultes,nbenfants,datedep,datearr) VALUES (:ref,:type,:id,:nba,:nbe,:dd,:da)');
        $result = $requete->execute(['ref'=>$ref, 'type'=>'hotel', 'id'=>$_COOKIE['id_client'], 'nba'=>$nba, 'nbe'=>$nbe, 'dd'=>$dated, 'da'=>$datea]);
        header('location: /air2/home/reserver/hotel/');
    }
  }
?>
