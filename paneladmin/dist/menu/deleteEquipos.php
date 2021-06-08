

<div id="layoutSidenav_content" style="margin-top:10%;margin-left:5%;"> <!-- ¿Que hace esto? -->
<div>
<?php  

$arrel_site ="../";
include $arrel_site . 'adminHeader.php';    

$id =  $_POST["id_equipos"];
$nombre =  $_POST["nombre_equipo"];


$con = new mysqli("localhost", "root", "", "clubfutbol");
$consulta = "DELETE FROM equipos WHERE id_equipos = '$id' and nombre_equipo = '$nombre'";
if(mysqli_query($con,$consulta)){
    echo"<p> Borrado correctamente </p>";
}else{
    echo"<p> NO se ha podido borrar el equipo </p>"; //<< salta aqui

}   
echo '<td><a href="./../gestion-de-equipos.php">Volver</a></td>';
?>

<main>
