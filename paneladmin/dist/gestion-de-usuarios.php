<?php

$arrel_site = "";
include 'adminHeader.php';
                
include 'adminFooter.php';


?>
<main>
<div class="container">
    <div class="row">
        <div class="col-5.2" style="margin-left: 0%;">
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
                        <th>ID Usuario</th>
                        <th>Nombre Usuario</th>
                        <th>Email</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                        //falta mostrar todos los usuarios ¿¿porque se multiplican??
                        $sql = "SELECT usuario.id_usuario, usuario.usuario, usuario.correo_electronico, rel_usuario_tipousuario.id_tipousuario from usuario left join rel_usuario_tipousuario on usuario.id_usuario = rel_usuario_tipousuario.id_usuario"; 
                        $result = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row["id_usuario"] . "</td>";
                            echo "<td>" . $row["usuario"] . "</td>";
                            echo "<td>" . $row["correo_electronico"] ."</td>";
                            echo "<td>". $row["id_tipousuario"] ."</td>";

                        /* while($row2 = mysqli_fetch_array($result)){ //comprobar cuantos roles tiene
                                echo "<td>". $row["id_tipousuario"] . $row2["id_tipousuario"] ."</td>";
                                //falta boton
                            }*/
                            /*<td><a href="./menu/editUsuario.php">Editar</a></td>*/
                            echo "</tr>";
                        }
                        

                        
                    ?>
                    <tr>
                </tbody>
            </table>
        </div>
    
        <div class="col-4" style="margin-top: 1%; margin-left: 10%;" >

            <h1 style="font-size: 28px;" class="border border-dark">Añadir Rol</h1>
            <form action="menu/addRol.php" class="border border-dark" method="post">
                ID Usuario: <input type="text" name="id_usuario"><br>
                ID Rol: <input type="text" name="id_tipousuario"><br>
                <input type="submit" value="Enviar"> <!-- update posicion_jugador, nombre_equipo from usuario where id_usuario=$id_usuario -->
            </form>

            <br><br><br><br><br>

            <h1 style="font-size: 28px;" class="border border-dark">Borrar Rol</h1>
            <form action="menu/deleteRelUsuRol.php" class="border border-dark" method="post">
                Id: <input type="text" name="id_usuario"><br>
                Id Rol: <input type="text" name="id_tipousuario"><br>
                

                <input type="submit" value="Borrar"> <!-- update usuario set nombre_equipo = [$nombre_equipo] -->
            </form>

            
        </div>
    </div>
</div>
</main>