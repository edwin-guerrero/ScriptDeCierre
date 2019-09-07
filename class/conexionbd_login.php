<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'script');
$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
//verificar conexion
if ($link===false) {
	die("ERROR en la conexion a la base de datos".mysqli_connect_error());
}
 ?>