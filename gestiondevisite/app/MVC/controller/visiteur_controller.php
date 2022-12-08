<?php

include_once'../modele/visiteur_modele.php';

$visiteurDATA = new visiteur_DAO();

/////////////////////////Fonction Voir /////////////////////////////////////

if(isset($_REQUEST['functionSee'])){
    $view = true;

    $VisiteurData = $visiteurDATA->getInfoById($_GET['functionSee']);

    require_once ("../view/header_view.php");
    require_once("../view/visiteurMAJ_view.php");
}

/////////////////////////Autres conditions /////////////////////////////////////

else{
    $VisiteurData = $visiteurDATA->getAllVisiteur();
    $nombreRapport = visiteur_DAO::getTotalRapport();

    require_once('../view/header_view.php');
    require_once('../view/visiteur_view.php');
}

