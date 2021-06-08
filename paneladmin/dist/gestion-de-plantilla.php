<?php  
$arrel_site = "";
include 'adminHeader.php';
        
include 'adminFooter.php';
?>

<div id="layoutSidenav_content"> <!-- ¿Que hace esto? -->
<div>

<main>
<div class="container">
    <div class="row">
        <div class="col-5.2" style="margin-left: 0%;">
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr><br><br>
                        <th>ID</th>
                        <th>Jugador</th>
                        <th>Posicion</th>
                        <th>Equipo</th>

                    </tr>
                </thead>
                <tbody>
                <?php
                //$sql = "select id_equipos, nombre_equipo, categoria, descripcion_equipo from equipos"; 
                $sql = "SELECT id_usuario, usuario, posicion_jugador, nombre_equipo FROM usuario ORDER BY nombre_equipo asc"; 

                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_array($result)) { 
                    $nombreEquipo = array();
                    echo "<tr>";
                    echo "<td>" . $row["id_usuario"] . "</td>";
                    echo "<td>" . $row["usuario"] . "</td>";
                    echo "<td>". $row["posicion_jugador"] ."</td>";
                    echo "<td>". $row["nombre_equipo"] ."</td>";

                    $nombreEquipo = $row["nombre_equipo"];
//                    echo $nombreEquipo;

                    echo "</tr>";
                }
                        

                ?>

                </tbody>
            </table>
        </div>
 
        <div class="col-4" style="margin-top: 1%; margin-left: 10%;" >

            <h1 style="font-size: 28px;" class="border border-dark">Añadir Equipo y Posicion a Jugador</h1>
            <form action="menu/addJugador.php" class="border border-dark" method="post">
                Nombre Jugador: <input type="text" name="usuario"><br>
                Posicion Jugador: <input type="text" name="posicion_jugador"><br>
                Nombre Equipo: <input type="text" name="nombre_equipo"><br>
                <input type="submit" value="Enviar"> <!-- update posicion_jugador, nombre_equipo from usuario where id_usuario=$id_usuario -->
            </form>

            <br><br><br><br><br>

            <h1 style="font-size: 28px;" class="border border-dark">Borrar Jugador</h1>
            <form action="menu/deleteJugador.php" class="border border-dark" method="post">
                Id: <input type="text" name="id_usuario"><br>
                Nombre Jugador: <input type="text" name="usuario"><br>
                Posicion: <input type="text" name="posicion_jugador"><br>
                Nombre Equipo: <input type="text" name="nombre_equipo"><br>

                <input type="submit" value="Borrar"> <!-- update usuario set nombre_equipo = [$nombre_equipo] -->
            </form>

            <br><br><br><br><br>

            <h1 style="font-size: 28px;" class="border border-dark">Editar Jugador</h1>
            <form action="menu/editJugador.php" class="border border-dark" method="post">
                Id: <input type="text" name="id_usuario"><br>
                Nombre Jugador: <input type="text" name="usuario"><br>
                Posicion: <input type="text" name="posicion_jugador"><br>
                Nombre Equipo: <input type="text" name="nombre_equipo"><br>

                <input type="submit" value="Editar"> <!-- update usuario set nombre_equipo = [$nombre_equipo] -->
            </form>
        </div>
    </div>
</div>
</main>