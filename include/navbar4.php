<html lang="fr">

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg">
  <div class="container">
   <a class="navbar-brand" href="index.php">
    <img src="./img/loogoo.png?<?= rand(); ?>" width="100" height="88" class="d-inline-block align-top" alt="">

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarNav">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link btn btn-secondary btn-font-white btn-color-special" href="index.php">Acceuil</a>
      </li>&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link btn btn-secondary btn-info" href="connexion.php">Connexion</a>
      </li>

    </ul>
    </div>
     </div>
</nav>

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
