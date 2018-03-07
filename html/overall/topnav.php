
    <!-- Navigation -->
<<<<<<< HEAD
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top menu">
      <div class="container">
        <h1 class="text-light">TAPS DISEÑOS</h1>
=======
    <nav class="navbar navbara navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container"> 
      <div id="animated-example" class="animated flipInX"><img src="views/images/logo5.png" class="logo" alt="" /></div>
>>>>>>> 4310dd9ef0dba691802b2073cbde0422623ceec9
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link box bar" href="?view=index">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link box bar" href="?view=Nosotros">Nosotros</a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link box bar" data-toggle="dropdown" href="#">Productos <i class="fas fa-sort-down"></i></a> 
                    <ul class="dropdown-menu">
                      <li ><a href="?view=carteras">Carteras</a></li>
                      <li ><a href="?view=collares">Collares</a></li>
                      <li ><a href="?view=correas">Correas</a></li>
                      <li ><a href="?view=pulceras">Pulceras</a></li>
                    </ul>
                </li>            
            <li class="nav-item">
              <a class="nav-link box bar" href="#">Actualidad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link box bar" href="#">Contactanos</a>
            </li>


          <?php 
            if(!isset($_SESSION['app_id']))
            {
              echo '<li class="nav-item "><a class="nav-link box curmudgeon" data-toggle="modal" data-target="#Login" href="#">Iniciar Sesión</a></li>';
              echo '<li class="nav-item ">
              <a class="nav-link box foo" data-toggle="modal" data-target="#Reg" href="#">Registrarse</a>          
              </li>';

            }
            else
            {
              echo '<li class="nav-item "><a class="nav-link box curmudgeon" data-toggle="modal" data-target="#Login" href="#">'.strtoupper($user[$_SESSION['app_id']]['user']).'</a></li>';

              echo '<li class="nav-item ">
              <a class="nav-link box curmudgeon" data-toggle="modal" data-target="#Reg" href="#">Cuenta</a>          
              </li>';
            
              echo '<li class="nav-item ">
              <a class="nav-link box curmudgeon" href="Desconectar.php">Cerrar Sessión</a>     
                </li>';
            }         
            ?>          

          </ul>
        </div>
      </div>
    </nav>

<?php
  if(!isset($_SESSION['app_id']))
  {
   include(HTML_DIR . 'public/login.html'); 
   include(HTML_DIR . 'public/reg.html'); 
   include(HTML_DIR . 'public/lostpass.html');    
  }
?>
 
         









         

          
   

