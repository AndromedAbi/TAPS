<?php
/*
  EL NUCLUEO DE LA APLICACIÓN
*/
session_start();

#Constantes de Conexion
define('DB_HOST','');
<<<<<<< HEAD
define('DB_USER','root');
=======
define('DB_USER','');
>>>>>>> 1fea578d8f742afcbf9858be4f4d2a29888fd237
define('DB_PASS','');
define('DB_NAME','');



#Constante de la APP
define('HTML_DIR','html/');
define('APP_TITLE','Taps Diseños');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Taps Diseños. ');
define('APP_URL','http://localhost/startbootstrap-shop-homepage-gh-pages');

#Constante de PHPMailer
define('PHPMAILER_HOST','p3plcpnl0173.prod.phx3.secureserver.net');
define('PHPMAILER_USER','public@ocred.com');
define('PHPMAILER_PASS','Prinick2016');
define('PHPMAILER_PORT','465');

require('vendor/autoload.php');
require('model/Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/User.php');
require('core/bin/functions/EmailTemp.php');


<<<<<<< HEAD
=======

>>>>>>> 1fea578d8f742afcbf9858be4f4d2a29888fd237
//$user = User();


?>
