<?php
header('Content-Type: application/json');

include('../pgconnect.php');
include('../classes/Connexion.class.php');
include('../classes/Reservation.class.php');
include('../classes/ReservationBD.class.php');

$cnx = Connexion::getInstance($dsn,$user,$password);

$rechreserv =array();
$reserv = new ReservationBD($cnx);
$rechreserv[] = $reserv->getlisteallreserv();
print json_encode($rechreserv);