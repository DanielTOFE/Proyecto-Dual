<?php



?>
<div id="layoutSidenav_content" style="margin-top:10%;margin-left:5%;"> <!-- ¿Que hace esto? -->
<div>
<!--<div id="layoutSidenav_content" style="margin-top:10%;margin-left:5%;">  ¿Que hace esto? 
<div>-->
<?php  


$arrel_site ="../";
include $arrel_site . 'adminHeader.php';    

$id = $_POST['id_usuario'];
$nombre =  $_POST["usuario"];
$posicion = $_POST["posicion_jugador"];
$equipo = $_POST["nombre_equipo"];

$con = new mysqli("localhost", "root", "", "clubfutbol");
$consulta = "DELETE FROM usuario WHERE id_usuario = '$id'";
//$consulta = "UPDATE usuario SET equipo= '$equipo' WHERE usuario = '$nombre'";

if(mysqli_query($con,$consulta)){
    echo"<p> Borrado de Jugador correcto </p>";
}else{
    echo"<p> Error al borrar jugador </p>"; // << salta aqui

}
echo '<td><a href="./../gestion-de-plantilla.php">Volver</a></td>';
?>

<main>
