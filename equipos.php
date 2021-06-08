<?php 

    $page="equipos";
    $arrel_site = "";
    include 'view/head.php';

    include 'view/header.php';
?>

<main>
    <h1 style="margin-top: 2%; margin-left: 20%;">Equipos</h1>
    <div class="bg-light row align-items-center justify-content-center vh-10">
  
    <main>

<div class="container">
    <div class="row">
        <div class="col-4" style="margin-left: 2%;">
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr><br><br>
                        <th>Nombre equipo</th>
                        <th>Categoria</th>
                        <th>Plantilla</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $con = new mysqli("localhost", "root", "", "clubfutbol");

                        $sql = "select nombre_equipo, categoria from equipos"; 
                        $result = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row["nombre_equipo"] . "</td>";
                            echo "<td>" . $row["categoria"] . "</td>";                                
                            echo "<td><a href=' ". $arrel_site . $row['nombre_equipo'] . ".php' class='btn btn-primary btn-lg' role='button'>Ver Plantilla</a></td>";
                            echo "</tr>";

                        }            
                    ?>
                    
                    <tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</main> 

<?php
    include 'view/footer.php';
?>
    
