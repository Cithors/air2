<?php

  class user{
    public function setBdd(){
      $connexion = new PDO('mysql:host=localhost;dbname=tour2controle','root','');
      return $connexion;
    }

    public function connexion($email, $pwd){
      $bdd = $this->setBdd();
      $result = $bdd->prepare("SELECT id, password as 'mdp' FROM user WHERE mail=:mail");
      var_dump($result);
      $resultat = $result->execute(['mail'=>$email]);
      var_dump($resultat);
      $resultat = $result->fetch();
      var_dump($resultat);
      if($resultat['mdp'] == md5($pwd)){
        setcookie('id_client',$resultat['id'],time()+1200,'/');
        header('location: /air2/home');
      }else{
        setcookie('msg','Identifiant ou mot de passe introuvable(s) !',time()+10,'/');
        header('location: /air2/');
      }
    }

    public function deconnexion() {
      setcookie('id_client',$resultat['id'],time()-1,'/');

    }

    public function inscription($nom, $prenom, $mail, $pwd){
      $connexion=$this->setBdd();
      $requete = $connexion->prepare("INSERT INTO user(nom,prenom,mail,password,role) VALUES (:n,:p,:m,:pwd,'client')");
      $resultat = $requete->execute(['n'=>$nom,'p'=>$prenom,'m'=>$mail,'pwd'=>md5($pwd)]);
      $this->connexion($mail,$pwd);
    }

    public function erreurinscription(){
      setcookie('msg','Les mots de passe ne correspondent pas',time()+10,'/');
      header('location: test2.php');
    }

    public function verif(){
      if(isset($_COOKIE['msg'])){
        echo $_COOKIE['msg'];
      }
      if(!isset($_COOKIE['user_id'])){
        header('location: /');
      }
    }

    public function profil(){
        $connexion = $this->setBdd();
        $requete = $connexion->prepare('SELECT * FROM reservation WHERE id_client=:id');
        $result = $requete->execute(['id'=>$_COOKIE['id_client']]);
        $result = $requete->fetchall();
        echo '
        <meta charset="utf-8"/>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Référence</th>
      <th scope="col">Type</th>
      <th scope="col">Nombre adultes</th>
      <th scope="col">Nombre enfants</th>
      <th scope="col">Départ</th>
      <th scope="col">Retour</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>';
  foreach($result as $tableau){
    echo '
    <tr>
      <td>'.$tableau['ref'].'</td>
      <td>'.$tableau['type'].'</td>
      <td>'.$tableau['nbadultes'].'</td>
      <td>'.$tableau['nbenfants'].'</td>
      <td>'.$tableau['datedep'].'</td>
      <td>'.$tableau['datearr'].'</td>
      <td>
        <form action="del.php" method="post">
          <a>
          <button value="'.$tableau['id'].'" name="tab" class="btn btn-info">Annuler</button>
          </a>
        </form>
      </td>
    </tr>
    ';
  }
    echo '
  </tbody>
</table>
          ';
    }

    public function delreservation($id){
        $connexion = $this->setBdd();
        $requete = $connexion->query("DELETE FROM reservation WHERE id=$id");
        header('location: index.php');
    }
  }
?>
