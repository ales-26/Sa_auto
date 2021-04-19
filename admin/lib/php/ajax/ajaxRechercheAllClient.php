<?php
header('Content-Type: application/json');

include('../pgconnect.php');
include('../classes/Connexion.class.php');
include('../classes/Client.class.php');
include('../classes/ClientBD.class.php');

$cnx = Connexion::getInstance($dsn,$user,$password);

$rechcli =array();
$client = new ClientBD($cnx);
$rechcli[] = $client->getlisteAllclient();
print json_encode($rechcli);