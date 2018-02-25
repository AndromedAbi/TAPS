<?php
 

if(!empty($_POST['email']) and !empty($_POST['pass']))
{
    $db = new Conexion();
    $email = $db->real_escape_string($_POST['email']);
    $pass = Encrypt($_POST['pass']);
    $sql = $db->query("SELECT * FROM usuarios WHERE email='$email' AND clave='$pass' LIMIT 1;");
    if($db->rows($sql) > 0)
    {
        echo '1';
    }
    else
    {
        echo '<div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>ERROR:</strong> El Email no esta registrado. </div>';
    }
    $db->close();   
}
else
{   
    echo '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> Todos los datos deben estar llenos. </div>';
}
?>