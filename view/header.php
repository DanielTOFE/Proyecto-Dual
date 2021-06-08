<?php 
  session_start();
?>

<header>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar Publicidad -->
 
    <br>
    <a class="navbar-brand" href="https://www.facebook.com/futbollekop/"> <img src="./view/imagenes/patrocinios/tecnica.jpg" type="button" href="#" width="120" height="60"> </a>

    <a class="navbar-brand" href="http://www.polleriasuiza.com/"> <img src="./view/imagenes/patrocinios/polleriaSuiza.png" type="button" href="#" width="120" height="60"> </a>
    <a class="navbar-brand" href="https://carpinteriapersilux.com/"> <img src="./view/imagenes/patrocinios/perlisux.jpg" type="button" href="#" width="120" height="60"> </a>
    <a class="navbar-brand" href="https://www.ferreterialuma.com/"> <img src="./view/imagenes/patrocinios/ferreteria.jpg" type="button" href="#" width="150" height="60"> </a>
    <a class="navbar-brand" href="https://www.pentexsport.com/"> <img src="./view/imagenes/patrocinios/pentex.jpg" type="button" href="#" width="120" height="60"> </a>

    <a class="navbar-brand" href="https://www.plusultra.es/"> <img src="./view/imagenes/patrocinios/plusultra.png" type="button" href="#" width="120" height="60"> </a>
    <br>
 
 <!-- boton para ir al resto de publicidad, solo salen las 2 top.-->
 <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>           
  </button> -->
</nav>
<!-- Navbar Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
            <a class="navbar-brand" href="./index.php"> <img src="./view/imagenes/escudoIndex.png" type="button" href="#" width="110" height="60"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if($page=="equipos"){ echo "active"; } ?>" href="equipos.php" >Equipos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Club
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item <?php if($page=="noticias"){ echo "active"; } ?>" href="noticias.php">Noticias</a>
            <a class="dropdown-item <?php if($page=="contacto"){ echo "active"; } ?>" href="contacto.php">Contacto(poner googlemap)</a>
            <a class="dropdown-item <?php if($page=="horarioOficinas"){ echo "active"; } ?>" href="horarioOficina.php">Horario de Oficinas</a>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Datos Del Club</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item <?php if($page=="historia"){ echo "active"; } ?>" href="historia.php">Historia</a>
                <a class="dropdown-item <?php if($page=="escudo"){ echo "active"; } ?>" href="escudo.php">Escudo</a>
                <a class="dropdown-item <?php if($page=="indumentaria"){ echo "active"; } ?>" href="equipaciones.php">Indumentaria</a>
                <a class="dropdown-item <?php if($page=="canticos"){ echo "active"; } ?>" href="canticos.php">Canticos</a>
              </div>
           
              
          </div>

            <a class="dropdown-item <?php if($page==""){ echo "active"; } ?>" href="#"></a>
            
        </li>

        <li class="nav-item">
          <a class="nav-link <?php if($page=="instalaciones"){ echo "active"; } ?>" href="instalaciones.php">Instalaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($page=="juntadirectiva"){ echo "active"; } ?>" href="juntadirectiva.php">Junta Directiva</a>
        </li>

      </ul>
    </div>
    <?php 
      if(isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])){
        echo 'Bienvenid@ '. $_SESSION["usuario"] . ' ' ;
        include 'logoutform.php';
      }else{
        include 'loginform.php';
        include 'registerform.php';
      }
    ?>
    

    
  
</nav>

</header>