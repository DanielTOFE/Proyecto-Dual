<?php 

    $page="equipos";

    include 'view/head.php';

    include 'view/header.php';
?>

<main>
    <h1 style="margin-top: 2%; margin-left: 20%;">Equipos</h1>
    <div class="bg-light row align-items-center justify-content-center vh-10">
  
    <main>

<table class="table table-responsive table-bordered">
    <thead>
        <tr><br><br>
            <th>Nombre Jugador</th>
            <th>Posicion</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $con = new mysqli("localhost", "root", "", "clubfutbol");

            $sql = "select usuario, posicion_jugador from usuario where "; 
            $result = mysqli_query($con,$sql);
           
            
            

            
        ?>

        <tr>
        
    </tbody>
</table>





</main>
 


<?php
    include 'view/footer.php';
?>
    
