<?php
require_once 'include/configuration.php';

Autoloader::chargerClasses();


if (!isset($_REQUEST['gestion'])) {

    $_REQUEST['gestion'] = 'accueil';

    // Il y a deux variables, gestion et action


}

$oRouteur = new $_REQUEST['gestion']($_REQUEST);



$oRouteur->choixAction();
// exemple filtrer, supprimer, modifier, etc etc




/**
 * Importer la base de données
 * 
 * 
 * 
 */





