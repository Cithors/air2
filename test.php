<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/JUMELLE.png">
    <link rel="stylesheet" href="style.css">
    <title>LOOKTRIP</title>
    <html lang="fr">
<!--HEAD-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="icon" href="./img/JUMELLE.png">
        <title>Look Trip</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="testlog.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="testlog.css">
    </head>
    <!-- END head-->
<!--Nab bar -->
    <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg">
      <div class="container">
       <a class="navbar-brand" href="index.php">
        <img src="./img/loogoo.png?<?= rand(); ?>" width="65" height="55" class="d-inline-block align-top" alt="">
    </a>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav ml-auto">
&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="dropdown">
            <a href="#"  class="nav-link btn btn-info" data-toggle="dropdown"><b><h4>Connexion</h4></b> <span class="caret"></span></a>
        <ul id="login-dp" class="dropdown-menu">
          <li>
             <div class="row">
                <div class="col-md-12">
                  Se connecter via
                  <div class="social-buttons">
                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                  </div>
                                  or
                   <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                      <div class="form-group">
                         <label class="sr-only" for="exampleInputEmail2">Email</label>
                         <input type="email" class="form-control" id="exampleInputEmail2" placeholder="example@mmail.com" required>
                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="exampleInputPassword2">Mot de passe</label>
                         <input type="password" class="form-control" id="exampleInputPassword2" placeholder="*********" required>
                                               <div class="help-block text-right"><a href="">Mot de passe oublié ?</a></div>
                      </div>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary btn-block">Conexion</button>
                      </div>
                      <div class="checkbox">
                         <label>
                         <input type="checkbox"> rester connecter
                         </label>
                      </div>
                   </form>
                </div>
                <div class="bottom text-center">
                  Nouveau ? <a href="inscription.php"><b>Inscris-toi</b></a>
                </div>
             </div>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;
        </ul>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;

          &nbsp;&nbsp;
          <li class="dropdown">
            <a href="#"  class="nav-link btn btn-info" data-toggle="dropdown"><b><h4>Inscription</h4></b> <span class="caret"></span></a>
        <ul id="login-dp" class="dropdown-menu">
          <li>
             <div class="row">
                <div class="col-md-12">
                  S'inscrire

                   <br><form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                     <div class="form-group">
                        <label class="sr-only">Nom</label>
                        <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                     </div>
                     <div class="form-group">
                        <label class="sr-only">Prénom</label>
                        <input type="text" name="prenom" class="form-control" placeholder="Prénom" required>
                     </div>
                      <div class="form-group">
                         <label class="sr-only" for="exampleInputEmail2">Email</label>
                         <input type="email" class="form-control" id="exampleInputEmail2" placeholder="example@mmail.com" required>
                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="exampleInputPassword2">Mot de passe</label>
                         <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Mot de passe" required>

                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="exampleInputPassword2">Mot de passe</label>
                         <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Vérification du mot de passe" required>

                      </div>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                      </div>

                   </form>
                </div>
                <div class="bottom text-center">
                  En vous inscrivant vous acceptez les <a href="inscription.php"><b>Conditions générales</b></a> et la <a href="inscription.php"><b>Politiques de confidentialité</b></a>
                </div>
             </div>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;
        </ul>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        </ul>&nbsp;&nbsp;
        </div>
         </div>
    </nav>

      <div class="row">
        <center>
        <img src="img/realbg.png" width="100%" height="650" class="d-inline-block align-top" alt="">
        </center>
      </div>
<!--END Nab bar -->
    <!-- BODY -->
    <body>


    <div class="container">
        <div class="col-md-8 mx-auto">
            <?php
            if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-purple alert-dismissible fade show" role="alert" >
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

  </head>


  </body>
</html>
