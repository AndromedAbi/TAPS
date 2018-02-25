<?php

$db = new Conexion();
$email = $db->real_escape_string($_POST['email']);
$user =$db->real_escape_string($_POST['user']);
$pass = Encrypt($_POST['pass']);

$sql = $db->query("SELECT email FROM usuarios WHERE email='$email' LIMIT 1;");

if($db->rows($sql) == 0)
{
    //proceso de registro
   /* $keyreg=md5(time());
    $link = APP_URL . '?view=activar&key=' . $keyreg;
    // ENVIAR CORREO PARA VALIDAR LA CUENTA 
    
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {        
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = PHPMAILER_HOST;  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = PHPMAILER_USER;                 // SMTP username
        $mail->Password = PHPMAILER_PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = PHPMAILER_PORT;                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom(PHPMAILER_USER, APP_TITLE); //quien manda el correo

        $mail->addAddress($email, $user);     // Add a recipient // a quien 
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Activación de tu cuenta';
        $mail->Body    = EmailTemp($user,$link);
        $mail->AltBody = 'Hola ' . $user . 'Para activar tu cuenta accede al siguiente enlace:' . $link;
    
        $mail->send();
        echo 'Message has been sent';
         $db->query("INSERT INTO usuarios (user,email,clave,keyreg) VALUES ('$user','$email','$pass','$keyreg');");
         $sql_2= $db->query("SELECT MAX(id) as id from usuarios;");
         $_SESSION['app_id']= $db->recorrer($sql_2)[0];
         $db->liberar($sql_2);
         $html=1;
        }
         catch (Exception $e)
        {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }  
        */
        $html='ok';
}
else
{
    $correo = $db->recorrer($sql)[0];
    if(strtolower($email) == strtolower($correo))
    {
        $html = '<div class="alert alert-dismissible alert-danger">
         <h4>Registro Completado!</h4>
         <p><strong>El email ingresado ya existe</strong></p>
         </div>'; 
   }           
}
$db->liberar($sql);
$db->close();
echo $html;
?>