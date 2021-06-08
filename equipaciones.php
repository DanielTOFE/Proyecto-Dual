<?php 

    $page="equipos";

    include 'view/head.php';

    include 'view/header.php';
?>
<!-- meter las equipaciones para poder comprar las -->
<div class="caja" style="display: flex; flex-flow: column wrap; justify-content: center; align-items: center; background: #ffffff;">
    <div class="box" style="display: flex; width: 450px;vheight: 300px; background: #ffffff;">
        <img src="view/imagenes/tienda/primeraportero.jpg" alt="Primera Equipacion Portero">
        <a>Primera Equipacion Portero</a>
        
        <img src="view/imagenes/tienda/segundaportero.jpg" alt="Segunda Equipacion Portero">
        <a>Segunda Equipacion Portero</a>

    </div>

    <div class="box" style="width: 300px; height: 200px; background: #ffffff; overflow: hidden;">
        <img src="view/imagenes/tienda/primerajugador.jpg" alt="Primera Camiseta Jugador">
        <a>Primera Camiseta</a>

    </div>

    <div class="box" style="width: 200px; height: 300px; background: #ffffff; overflow: hidden;">      
        <img src="view/imagenes/tienda/segundajugador.jpg" alt="Segunda Camiseta Jugador">
        <br>
        <a>Segunda Camiseta Jugador</a>
        <br>
        
    </div>


    <div class="box" style="width: 200px; height: 300px; background: #ffffff; overflow: hidden;">      
        <img src="view/imagenes/tienda/pantalonjugador.jpg" alt="Pantalon Jugador">
        <br>
        <a>Pantalon Jugador</a>
        <br>
    </div>

    <div class="box" style="width: 200px; height: 300px; background: #ffffff; overflow: hidden;">      
        <img src="view/imagenes/tienda/michetasjugador.jpg" alt="Michetas Jugador">
        <br>
        <a>Michetas Jugador</a>
        <br>
    </div>
</div>

<?php
    include 'view/footer.php';
?>

