<?php

$arrel_site = "";
include 'adminHeader.php';
                
include 'adminFooter.php';


?>
<main>

    <table class="table table-responsive table-bordered">
        <thead>
            <tr><br><br>
                <th>Nombre Jugador</th>
                <th>Posicion</th>
                <th>Asistencia</th>
                <th>Editar Informacion</th>
            </tr>
        </thead>
        <tbody>
            <?php 
               

                $sql = "SELECT * from usuario join rel_usuario_tipousuario on usuario.id_usuario where id_tipousuario = 2"; 
                $result = mysqli_query($con,$sql);
                //echo $sql;
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["usuario"] . "</td>";
                    echo "<td>". $row["posicion_jugador"] ."</td>";
                /*    <td><a href="./menu/editUsuario.php">Editar</a></td>*/
                    echo "</tr>";
                }                
            ?>

            <tr>       
        </tbody>
    </table>
</main>