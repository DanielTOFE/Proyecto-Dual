
        
        <?php  
        $arrel_site = "";
        include 'adminHeader.php';
                
        include 'adminFooter.php';
        ?>

        <div id="layoutSidenav_content">
        <div>
<main>

    <table class="table table-responsive table-bordered">
        <thead>
            
            <tr><br><br>
                <th>Nombre Jugador</th>
                <th>Posicion</th>
                <th>Editar</th>

            </tr>
        </thead>
        <tbody>

        <?php 
            $sql = "select usuario, posicion_jugador from usuario where nombre_equipo = 'Juvenil A'"; // <<cambiar juvenil A por bucle
            $result = mysqli_query($con,$sql);
            //echo $sql;
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row["usuario"] . "</td>";
                echo "<td>". $row["posicion_jugador"] ."</td>";
                $array_funcionalidades = array();

                for($i=0; $i<sizeof($array_funcionalidades); $i++){
                    $sql = "SELECT * FROM usuario WHERE id_usuario=" . $array_funcionalidades[$i];
    
                    $compruebaPersona = $con->query($sql);
                    while ($fila = $compruebaEquipo->fetch_array()){
                        echo '<a class="nav-link" href="' . $fila["id_equipo"] . '.php">Añadir</a>';
                    }
                }
                echo "<td><a href='delete.php' class='btn btn-danger btn-lg disabled'>Eliminar</td>"; // href='"delete.php?pagos_pagina=". $id[0]."'
                echo "</tr>";
            }

        ?>

     

        </tbody>
    </table>
</main>