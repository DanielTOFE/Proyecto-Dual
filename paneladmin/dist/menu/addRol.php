

<div id="layoutSidenav_content" style="margin-top:10%;margin-left:5%;"> <!-- ¿Que hace esto? -->
<div>
<?php  

$arrel_site ="../";
include $arrel_site . 'adminHeader.php';    

$id_usu =  $_POST["id_usuario"];
$id_rol =  $_POST["id_tipousuario"];

$con = new mysqli("localhost", "root", "", "clubfutbol");
$consulta = "INSERT INTO rel_usuario_tipousuario (id_usuario, id_tipousuario) VALUES ('$id_usu', '$id_rol')";

if(mysqli_query($con,$consulta)){
    echo"<p> Registro bien </p>";
}else{
    echo"<p> error en el registro </p>";//<< salta aqui

}
echo '<td><a href="./../gestion-de-usuarios.php">Volver</a></td>';
?>

<main>
