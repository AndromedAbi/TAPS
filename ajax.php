<?php

if($_POST)
{
  require('core/core.php');
  switch (isset($_GET['mode']) ? $_GET['mode'] : null)
   {
      case 'login':

        require('core/bin/ajax/goLogin.php');
      
          break;
      
      default:
          # code...
          break;
  }
    
}
else
{
    header('location: index.php');
}


?>