

<div id="layoutSidenav_content" style="margin-top:10%;margin-left:5%;"> <!-- ¿Que hace esto? -->
<div>
<?php  

$arrel_site ="../";
include $arrel_site . 'adminHeader.php';    

$id =  $_POST["id"];
$nombre =  $_POST["nombre"];
$categoria = $_POST["categoria"];
$campo = $_POST["campo"];
$descripcion = $_POST["descripcion_equipo"];

$con = new mysqli("localhost", "root", "", "clubfutbol");
$consulta = "INSERT INTO equipos (id_equipos, nombre_equipo, categoria, campo_entrenamiento, descripcion_equipo) VALUES ('$id', '$nombre', '$categoria', '$campo', '$descripcion')";

if(mysqli_query($con,$consulta)){
    echo"<p> Registro bien </p>";
}else{
    echo"<p> error en el registro </p>";//<< salta aqui

}
echo '<td><a href="./../gestion-de-equipos.php">Volver</a></td>';
?>

<main>
