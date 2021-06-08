<?php 

    $page="equipos";

    include 'view/head.php';

    include 'view/header.php';
?>

<main>

<table class="table table-responsive table-bordered">
    <thead>
        <!-- crear filas en bucle con boton para editar
             var fila=`<tr>
                        <td>${_idEmp}</td>
                        <td>${_nombre}</td>
                        <td>${_apellido}</td>
                        <td>${_numemp}</td>
                        <td>${_area}</td>
                        <td>${_tipoUs}</td>
                        <td><button>editar</button></td>

                        </tr>` -->
        <tr><br><br>
            <th>Nombre equipo</th>
            <th>Jugador</th>
            <th>Posicion</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // si el usuario tiene equipo no lo vuelve a mostrar, sino lo mete en un equipo.
            /*$array_funcionalidades = array();

            for($i=0; $i<sizeof($array_QueEquipo); $i++){
                $sql = "SELECT usuario.usuario FROM  equipos join usuario on equipos.id_equipos WHERE usuario.usuario= " . $array_QueEquipo[$i];                            
                $compruebaQueEquipo = $con->query($sql);
                
                while ($fila = $compruebaQueEquipo->fetch_array()){
                    if (!in_array($fila["usuario"], $array_funcionalidades)) { // si no esta en array_funconalidades lo metes, sino pasa
                        array_push($array_funcionalidades, $fila["usuario"]);
                    }                        
                }
            }*/

            //funciona 
            $con = new mysqli("localhost", "root", "", "clubfutbol");

            $sql = "select usuario.usuario, equipos.nombre_equipo, usuario.posicion_jugador from equipos join usuario on equipos.id_equipos where usuario.nombre_equipo = equipos.nombre_equipo";  // añadir WHERE usuario.id_equipos = equipos.id_equipos
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row["nombre_equipo"] . "</td>";
                echo "<td>" . $row["usuario"] . "</td>";
                echo "<td>" . $row["posicion_jugador"] . "</td>";                
                //falta boton
                echo "</tr>";
//                echo "<td><a href='' class='btn btn-danger btn-lg disabled' role='button' aria-disabled='true'>eliminar</a></button></td>";

            /*    <td><a href="./menu/editUsuario.php">Editar</a></td>*/
            }
            

            
        ?>

        <tr>
        
    </tbody>
</table>





</main>
 

<?php
    include 'view/footer.php';
?>
    
