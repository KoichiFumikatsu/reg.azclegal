<?php 
// datos para la conexion a mysql
/*
define('DB_SERVER','localhost');
define('DB_NAME','pipezafra_inv');
define('DB_USER','pipezafra_inv');
define('DB_PASS','z8912618Z@');
*/
define('DB_SERVER','mysql.us.cloudlogin.co');
define('DB_NAME','pipezafra_manager');
define('DB_USER','pipezafra_manager');
define('DB_PASS','z8912618Z@!$2024**');

$conex = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
mysqli_select_db($conex, DB_NAME);
?>