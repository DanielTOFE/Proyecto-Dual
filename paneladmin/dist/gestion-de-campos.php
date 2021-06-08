<?php

$arrel_site = "";
include 'adminHeader.php';
                
include 'adminFooter.php';


?>
<main>
<div class="container">
    <div class="row">
        <div class="col-5.5">
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr><br><br>
                        <th>Nombre Campo</th>
                        <th>Direccion campo</th>
                        <th>Codigo postal</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    

                        $sql = "select * from campos;"; 
                        $result = mysqli_query($con,$sql);
                        //echo $sql;
                        while($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row["nombre_campo"] . "</td>";
                            echo "<td>". $row["direccion_campo"] ."</td>";
                            echo "<td>". $row["codigo_postal_campo"] ."</td>";
                            echo "</tr>";
                        }
                        
                    ?>

                    <tr>       
                </tbody>
                
            </table>
        </div>

        <div class="col-4" style="margin-top: 5%;">
        <h2 class="border border-dark">Añadir Campo Nuevo</h2>
            <form action="menu/addCampos.php" class="border border-dark" method="post">
                Nombre Campo: <input type="text" name="nombre"><br>
                Direccion Campo: <input type="text" name="direccion"><br>
                Codigo Postal Campo: <input type="text" name="codigopostal"><br>
                <input type="submit" value="Añadir Campo">
            </form>
<br><br><br><br><br>
        <h2 class="border border-dark">Eliminar Campo</h2>
            <form action="menu/deleteCampo.php" class="border border-dark" method="post">
                Nombre Campo: <input type="text" name="nombre"><br>
                Direccion Campo: <input type="text" name="direccion"><br>
                Codigo Postal Campo: <input type="text" name="codigopostal"><br>
                <input type="submit" value="Eliminar Campo">
            </form>
        
    </div>
</div>
</main>