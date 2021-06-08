<?php



?>
<div id="layoutSidenav_content" style="margin-top:10%;margin-left:5%;"> <!-- ¿Que hace esto? -->
<div>
<?php  

$arrel_site ="../";
include $arrel_site . 'adminHeader.php';    

$nombre =  $_POST["nombre"];
$direccion =  $_POST["direccion"];
$codigopostal =  $_POST["codigopostal"];


$con = new mysqli("localhost", "root", "", "clubfutbol");
$consulta = "DELETE FROM campos WHERE nombre_campo = '$nombre' and direccion_campo = '$direccion' and codigo_postal_campo = '$codigopostal'";

if(mysqli_query($con,$consulta)){
    echo"<p> Campo borrado correctamente </p>";
}else{
    echo"<p> Error al borrar el Campo </p>"; //<< salta aqui

}   
echo '<td><a href="./../gestion-de-campos.php">Volver</a></td>';
?>

<main>
