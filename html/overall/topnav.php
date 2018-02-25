
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <h1 class="text-light">TAPS DISEÑOS</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">Productos </a>
                    <ul class="dropdown-menu">
                      <li ><a href="#">Carteras</a></li>
                      <li ><a href="#">Accesorios</a></li>
                      <li ><a href="#">Hogar</a></li>
                    </ul>
                </li>            
            <li class="nav-item">
              <a class="nav-link" href="#">Actualidad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contactanos</a>
            </li>


          <?php 
            if(!isset($_SESSION['app_id']))
            {
              echo '<li class="nav-item "><a class="nav-link" data-toggle="modal" data-target="#Login" href="#">Iniciar Sesión</a></li>';
              echo '<li class="nav-item ">
              <a class="nav-link" data-toggle="modal" data-target="#Reg" href="#">Registrarse</a>          
              </li>';

            }
            else
            {
              echo '<li class="nav-item "><a class="nav-link" data-toggle="modal" data-target="#Login" href="#">'.strtoupper($user[$_SESSION['app_id']]['user']).'</a></li>';

              echo '<li class="nav-item ">
              <a class="nav-link" data-toggle="modal" data-target="#Reg" href="#">Cuenta</a>          
              </li>';
            
              echo '<li class="nav-item ">
              <a class="nav-link" href="Desconectar.php">Cerrar Sessión</a>     
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
 
         









         

          
   

