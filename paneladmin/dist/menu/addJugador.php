<?php

$arrel_site ="../";


?>
<div id="layoutSidenav_content" style="margin-top:10%;margin-left:5%;"> <!-- ¿Que hace esto? -->
<div>
<?php  

$arrel_site ="../";
include $arrel_site . 'adminHeader.php';    

$nombre =  $_POST["usuario"];
$posicion =  $_POST["posicion_jugador"];
$equipo = $_POST["nombre_equipo"];



$con = new mysqli("localhost", "root", "", "clubfutbol");
$consulta = "UPDATE usuario SET posicion_jugador= '$posicion', nombre_equipo= '$equipo' WHERE usuario = '$nombre'";
echo "principio";
if(mysqli_query($con,$consulta)){
    echo"<p> Registro Jugador correcto </p>";
}else{
    echo"<p> Error al poner jugador 1</p>"; // << salta aqui

}
echo '<td><a href="./../gestion-de-plantilla.php">Volver</a></td>';
?>

<main>
