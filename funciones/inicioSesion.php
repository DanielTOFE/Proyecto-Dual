<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();



//una vez logeado, consulta que tipo usuario es, se guarda en una variable de sesion.


if(isset($_GET["usuario"]) && isset($_GET["contrasenya"])){
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

        $compruebaCifrado = $con->query("SELECT contrasenya, id_usuario FROM usuario WHERE usuario = '$usuario'");
        while ($fila = $compruebaCifrado->fetch_array()){
            $contrasenyaCifrada =$fila[0];
            $id_usuario = $fila[1];
        }
        if($compruebaCifrado->num_rows>0){
            if (password_verify($contrasenya, $contrasenyaCifrada)){

                $_SESSION["usuario"] = $usuario;
                //query tipo usuario                
                $compruebaUsuario = $con->query("SELECT id_tipousuario FROM rel_usuario_tipousuario WHERE id_usuario = '$id_usuario'");
                echo "no entra al while";
                //def array
                $array_tipo = array();
                while ($id = $compruebaUsuario->fetch_array()) {
                    $usuarioAsignado = $id["id_tipousuario"];
                    
                    array_push($array_tipo, $usuarioAsignado);
                  
                }
                echo "sale del while";
                // guardar en session
                $_SESSION['tipo-usuario'] = $array_tipo;
                
                
                header('location:./../paneladmin/dist/index.php');
            }else{
                echo "login incorrecto";
                
            }
        }
    }
}
/* guardar variable sesion usuario */
?>

