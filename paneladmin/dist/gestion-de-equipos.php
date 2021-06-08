<?php

$arrel_site = "";
include 'adminHeader.php';
                
include 'adminFooter.php';


?>

<main><br><br>


<div class="container">
    <div class="row">
        <div class="col-5.5" style="margin-left: 2%;">
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Equipo</th>
                        <th>Categoria</th>
                        <th>Descripcion</th>

                    </tr>
                </thead>
                <tbody>
                <?php 
                    $sql = "select id_equipos,nombre_equipo, categoria, descripcion_equipo from equipos"; 
                    $result = mysqli_query($con,$sql);
                    //echo $sql;
                    while($row = mysqli_fetch_array($result)) { //no carga bien algo falla en el select
                        echo "<tr>";
                        echo "<td>" . $row["id_equipos"] . "</td>";
                        echo "<td>" . $row["nombre_equipo"] . "</td>";
                        echo "<td>". $row["categoria"] ."</td>";
                        echo "<td>". $row["descripcion_equipo"] ."</td>";
                        $array_funcionalidades = array();

                        for($i=0; $i<sizeof($array_funcionalidades); $i++){
                            $sql = "SELECT * FROM equipos WHERE id_equipos=" . $array_funcionalidades[$i];

                            $compruebaEquipo = $con->query($sql);
                            while ($fila = $compruebaEquipo->fetch_array()){
                                //echo '<a class="nav-link" href="' . $fila["id_equipo"] . '.php">Eliminar</a>'; //<<<NOfunciona
                            }
                        }
                        //echo '<td><a href="./menu/eliminarEquipo.php">Eliminar</a></td>'; //<<<< funciona
                        echo "</tr>";
                    

                    }
                // echo '<td><a href="./menu/addEquipos.php">Añadir Equipo</a></td>'; //<<<< funciona
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-4" style="margin-top: 1%; margin-left: 10%;">
        <h1 style="font-size: 28px;" class="border border-dark">Añadir Equipo</h1>
            <form action="menu/addEquipos.php" class="border border-dark" method="post">
                Id: <input type="text" name="id"><br>
                Nombre Equipo: <input type="text" name="nombre"><br>
                Categoria: <input type="text" name="categoria"><br>
                Campo Entrenamiento: <input type="text" name="campo"><br>
                Descripcion: <input type="text" name="descripcion_equipo"><br>
                <input type="submit" value="Enviar"> <!-- update usuario set nombre_equipo = [$nombre_equipo] -->
            </form>
<br><br><br><br><br>
            <h1 style="font-size: 28px;" class="border border-dark">Borrar Equipo</h1>
            <form action="menu/deleteEquipos.php" class="border border-dark" method="post">
                Id: <input type="text" name="id_equipos"><br>
                Nombre Equipo: <input type="text" name="nombre_equipo"><br>
                <input type="submit" value="Borrar"> <!-- update usuario set nombre_equipo = [$nombre_equipo] -->
            </form>

        </div>
    </div>
</div>
</main>