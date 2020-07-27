<?php

define('DB_SRV', 'localhost');
define('DB_PASSWD', "Management2018");
define('DB_USER', 'DaviesJ');
define('DB_NAME', 'timekeepusers');

$connection = mysqli_connect(DB_SRV, DB_USER, DB_PASSWD, DB_NAME);

if($connection == false){

	die("Error: Connection to Database could not be made." . mysqli_connect_error());
}
?>
