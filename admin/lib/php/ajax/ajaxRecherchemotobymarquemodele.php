<?php
header('Content-Type: application/json');

include('../pgconnect.php');
include('../classes/Connexion.class.php');
include('../classes/Moto.class.php');
include('../classes/MotoBD.class.php');

$cnx = Connexion::getInstance($dsn,$user,$password);

$rechmoto =array();
$moto = new MotoBD($cnx);
$rechmoto[] = $moto->getmarquemodelmoto($_GET['marque_moto'],$_GET['model_moto']);
print json_encode($rechmoto);

