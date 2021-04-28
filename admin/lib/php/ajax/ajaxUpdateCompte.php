<?php
header('Content-Type: application/json');

include('../pgconnect.php');
include('../classes/Connexion.class.php');
include('../classes/Client.class.php');
include('../classes/ClientBD.class.php');

$cnx = Connexion::getInstance($dsn,$user,$password);

$c = array();
$cl = new ClientBD($cnx);
extract($_GET,EXTR_OVERWRITE);
$c[] = $cl->updateclient($champ,$id,$nouveau);
