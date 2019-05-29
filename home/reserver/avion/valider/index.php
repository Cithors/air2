<?php
    include '../../../../class/vol.class.php';
    echo $_GET['tab'];
    $tab = $_GET['tab'];
    $tab = explode(";",$tab);
    $avion = new vol();
    $reserver = $avion->reserver($tab[0],$tab[3],$tab[4],$tab[1],$tab[2]);
?>