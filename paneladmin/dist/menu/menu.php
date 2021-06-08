<?php

session_start();

$con = new mysqli("localhost", "root", "", "clubfutbol");

print_r($_SESSION["tipo-usuario"]);
$array_TipoUsu = $_SESSION["tipo-usuario"];
//consultar para cada tipo de usuario (for) las secciones que puede ver

?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Inicio
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>

                    <?php 
                        $array_funcionalidades = array();

                        for($i=0; $i<sizeof($array_TipoUsu); $i++){
                            $sql = "SELECT seccionesweb.id_secciones AS id FROM seccionesweb INNER JOIN rel_seccionesweb_tipousuario ON seccionesweb.id_secciones=rel_seccionesweb_tipousuario.id_secciones WHERE rel_seccionesweb_tipousuario.id_tipousuario= " . $array_TipoUsu[$i];                            
                            $compruebaTipoUsuario = $con->query($sql);
                            
                            while ($fila = $compruebaTipoUsuario->fetch_array()){
                                if (!in_array($fila["id"], $array_funcionalidades)) { // si no esta en array_funconalidades lo metes, sino pasa
                                    array_push($array_funcionalidades, $fila["id"]);
                                }                        
                            }
                        }

                        for($i=0; $i<sizeof($array_funcionalidades); $i++){
                            $sql = "SELECT * FROM seccionesweb WHERE id_secciones=" . $array_funcionalidades[$i];

                            $compruebaSeccion = $con->query($sql);
                            
                            while ($fila = $compruebaSeccion->fetch_array()){
                                echo '<a class="nav-link" href="' . $arrel_site . $fila["slug"] . '.php">
                                        <div class="sb-nav-link-icon"><i class="'.$fila["icon_secciones"].' "></i></div>
                                        ' . $fila["nombre_secciones"] .'
                                    </a>';
                            }
                        }
                        

                    ?>
                   
                
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?php  if(isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])){
                        echo 'Bienvenid@ '. $_SESSION["usuario"] . ' ' ;
                        } ?>
            </div>
        </nav>
    </div>

</div>