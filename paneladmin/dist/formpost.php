
<?php

$id =  $_POST["id"];
$nombre =  $_POST["nombre"];
$categoria = $_POST["categoria"];

$consulta = "INSERT INTO campos VALUES ('$id', '$nombre', '$categoria')";

?>


<body>
    <form action="index.php" method="post">
    <h1>Equipo Introducido</h1>

    ID: <?php echo $_POST["id"]; ?><br>
    Nombre Equipo: <?php echo $_POST["nombre"]; ?><br>
    Categoria: <?php echo $_POST["categoria"]; ?><br>
    <input type="submit" value="Volver">
</form>

</body>


