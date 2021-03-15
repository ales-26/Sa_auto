<?php
if(file_exists('./lib/php/pgconnect.php')){
    require './lib/php/pgconnect.php';
    require './lib/php/autoload.php';
} else if(file_exists('./admin/lib/php/pgconnect.php')){
    require './admin/lib/php/pgconnect.php';
    require './admin/lib/php/autoload.php';
}
