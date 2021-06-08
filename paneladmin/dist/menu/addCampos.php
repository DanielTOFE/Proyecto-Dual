
<div id="layoutSidenav_content" style="margin-top:10%;margin-left:5%;"> <!-- ¿Que hace esto? -->
<div>
<?php  

$arrel_site ="../";
include $arrel_site . 'adminHeader.php';    

$nombre =  $_POST["nombre"];
$direccion =  $_POST["direccion"];
$codigopostal =  $_POST["codigopostal"];

$con = new mysqli("localhost", "root", "", "clubfutbol");
$consulta = "INSERT INTO campos (nombre_campo, direccion_campo, codigo_postal_campo) VALUES ('$nombre', '$direccion', '$codigopostal')";
if(mysqli_query($con,$consulta)){
    echo"<p> Registro Campo correcto </p>";
}else{
    echo"<p> Error al Crear un Campo </p>"; // << salta aqui

}
echo '<td><a href="./../gestion-de-campos.php">Volver</a></td>';
?>

<main>
