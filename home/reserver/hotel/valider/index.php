<?php
    include '../../../../class/hotel.class.php';
    echo $_GET['tab'];
    $tab = $_GET['tab'];
    $tab = explode(";",$tab);
    $hote = new hotel();
    $reserver = $hote->reserver($tab[0],$tab[3],$tab[4],$tab[1],$tab[2]);
?>