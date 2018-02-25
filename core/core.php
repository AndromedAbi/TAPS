<?php
/*
  EL NUCLUEO DE LA APLICACIÓN
*/
session_start();

#Constantes de Conexion
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','dbtaps');



#Constante de la APP
define('HTML_DIR','html/');
define('APP_TITLE','Taps Diseños');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Taps Diseños. ');
define('APP_URL','http://localhost/startbootstrap-shop-homepage-gh-pages');


require('vendor/autoload.php');
require('model/Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/User.php');

$user = User();


?>
