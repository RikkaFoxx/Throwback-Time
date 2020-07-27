<?php

define('DB_SRV', 'REDACTED');
define('DB_PASSWD', "REDACTED");
define('DB_USER', 'REDACTED');
define('DB_NAME', 'REDACTED');

$connection = mysqli_connect(DB_SRV, DB_USER, DB_PASSWD, DB_NAME);

if($connection == false){

	die("Error: Connection to Database could not be made." . mysqli_connect_error());
}
?>
