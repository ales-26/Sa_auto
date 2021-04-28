<?php
header('Content-Type: application/json');

include('../pgconnect.php');
include('../classes/Connexion.class.php');
include('../classes/Voiture.class.php');
include('../classes/VoitureBD.class.php');

$cnx = Connexion::getInstance($dsn,$user,$password);

$rechvoit =array();
$voiture = new VoitureBD($cnx);
$rechvoit[] = $voiture->getmarquemodelvoit($_GET['marque_voiture'],$_GET['model_voiture']);
print json_encode($rechvoit);

