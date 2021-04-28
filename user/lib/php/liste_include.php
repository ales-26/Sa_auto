<?php
include('../admin/lib/php/classes/Connexion.class.php');
include('../admin/lib/php/pgconnect.php');
$cnx = Connexion::getInstance($dsn,$user,$password);
include('../admin/lib/php/classes/Voiture.class.php');
include('../admin/lib/php/classes/VoitureBD.class.php');
include('../admin/lib/php/classes/Moto.class.php');
include('../admin/lib/php/classes/MotoBD.class.php');
include('../admin/lib/php/classes/Client.class.php');
include('../admin/lib/php/classes/ClientBD.class.php');
include('../admin/lib/php/classes/Reservation.class.php');
include('../admin/lib/php/classes/ReservationBD.class.php');