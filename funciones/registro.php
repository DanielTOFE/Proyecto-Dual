<?php

if(isset($_GET["usuario"]) && isset($_GET["contrasenya"]) && isset($_GET["correo_electronico"])){
    enviar();
}

function enviar(){
    $con = new mysqli("localhost", "root", "", "clubfutbol");
    if($con->connect_errno){
        printf("Connectfailed:%s\n",$mysqli->connect_error);
        exit();
    } else {
        $usuario = $_GET["usuario"];
        $contrasenya = $_GET["contrasenya"];
        $correo = $_GET["correo_electronico"];
        $dni = $_GET["dni"];
        //echo "prinicipio";
        $consulta= $con->prepare("INSERT INTO usuario (usuario, contrasenya, correo_electronico, dni) VALUES (?,?,?,?)");
        $consulta->bind_param("ssss", $usuario, $contraCifrada, $correo, $dni);
        //echo "antes del hash";
        $contraCifrada = password_hash($contrasenya, PASSWORD_DEFAULT);
        $consulta->execute();
        //echo "antes if";
        if ($consulta->affected_rows==1){
            echo "dentro if";
            header('location:./../index.php');
        }else{
            echo "error";
        }
        //echo "final";
    }
}

?>