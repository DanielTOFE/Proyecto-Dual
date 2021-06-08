<?php



?>
<div id="layoutSidenav_content" style="margin-top:10%;margin-left:5%;"> <!-- ¿Que hace esto? -->
<div>
<?php  

$arrel_site ="../";
include $arrel_site . 'adminHeader.php';    

$id_usu =  $_POST["id_usuario"];
$id_rol =  $_POST["id_tipousuario"];

$con = new mysqli("localhost", "root", "", "clubfutbol");
$consulta = "DELETE FROM rel_usuario_tipousuario WHERE id_usuario = '$id_usu' and id_tipousuario = '$id_rol'";

if(mysqli_query($con,$consulta)){
    echo"<p> Relacion Rol-Usuario borrada correctamente </p>";
}else{
    echo"<p> Error al borrar la relacion usuario - rol </p>"; //<< salta aqui

}   
echo '<td><a href="./../gestion-de-usuarios.php">Volver</a></td>';
?>

<main>
