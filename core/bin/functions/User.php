<?php

function User()
{
    $db= new Conexion();
    $sql = $db->query("SELECT * FROM usuarios");
    if($db->rows($sql) > 0)
    {
        while ($d = $db->recorrer($sql))
        {
            $user[$d['id']] = array(
                'id' => $d['id'],
                'user' => $d['user'],
                'email' => $d['email'],
                'permiso' => $d['permiso']
            );
        }
    }
    else
    {
        $user = false;
    }
    $db->liberar($sql);
    $db->close();
    
    return $user;
}

?>