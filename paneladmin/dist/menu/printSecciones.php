<?php



/*
SELECT secc.slug, relsectipo.id_tipousuario, tipo.tipo_usuario FROM rel_seccionesweb_tipousuario AS relsectipo, seccionesweb AS secc, tipousuario AS tipo WHERE relsectipo.id_tipousuario=3 AND relsectipo.id_secciones = secc.id_secciones AND relsectipo.id_tipousuario= tipo.id_tipousuario
*/

function printSeccion($secc){
  switch ($secc) {
    case 'gestion-de-usuarios':
      gestionDeUsuarios();
      break;    
    case 'gestion-de-equipos':
       gestionDeEquipos();
       break;
    case 'gestion-de-campos':
       gestionDeCampos();
       break;
    case 'gestion-de-plantilla':
      gestionDeEquipos();
      break;

}
  
}

function gestionDeUsuarios(){
    echo '<h1>Gestión de los usuarios admin</h1>';//admin
    //$compruebaAdmin = $con->query("SELECT secc.slug, relsectipo.id_tipousuario, tipo.tipo_usuario FROM rel_seccionesweb_tipousuario AS relsectipo, seccionesweb AS secc, tipousuario AS tipo WHERE relsectipo.id_tipousuario=6 AND relsectipo.id_secciones = secc.id_secciones AND relsectipo.id_tipousuario= tipo.id_tipousuario");
  //  SELECT secc.slug, relsectipo.id_tipousuario, tipo.tipo_usuario FROM rel_seccionesweb_tipousuario AS relsectipo, seccionesweb AS secc, tipousuario AS tipo WHERE relsectipo.id_tipousuario=6 AND relsectipo.id_secciones = secc.id_secciones AND relsectipo.id_tipousuario= tipo.id_tipousuario
}                        


function gestionDeEquipos(){
    //echo '<h1>Gestión de equipos enternador-coordinador</h1>';//entrenador-coordinador
  //  SELECT secc.slug, relsectipo.id_tipousuario, tipo.tipo_usuario FROM rel_seccionesweb_tipousuario AS relsectipo, seccionesweb AS secc, tipousuario AS tipo WHERE relsectipo.id_tipousuario=4 AND relsectipo.id_secciones = secc.id_secciones AND relsectipo.id_tipousuario= tipo.id_tipousuario
  //  SELECT secc.slug, relsectipo.id_tipousuario, tipo.tipo_usuario FROM rel_seccionesweb_tipousuario AS relsectipo, seccionesweb AS secc, tipousuario AS tipo WHERE relsectipo.id_tipousuario=5 AND relsectipo.id_secciones = secc.id_secciones AND relsectipo.id_tipousuario= tipo.id_tipousuario
  //$mysqli = new mysqli("localhost", "root", "", "clubfutbol");
  //$sql = "SELECT secc.slug, relsectipo.id_tipousuario, tipo.tipo_usuario FROM rel_seccionesweb_tipousuario AS relsectipo, seccionesweb AS secc, tipousuario AS tipo WHERE relsectipo.id_tipousuario=4 AND relsectipo.id_secciones = secc.id_secciones AND relsectipo.id_tipousuario= tipo.id_tipousuario";   
  //$resultado=$mysqli->query($sql);
  //echo '$resultado';
}


function gestionDeCampos(){
    echo '<h1>Gestión de campos: coordinador</h1>';//coordinador
  //  SELECT secc.slug, relsectipo.id_tipousuario, tipo.tipo_usuario FROM rel_seccionesweb_tipousuario AS relsectipo, seccionesweb AS secc, tipousuario AS tipo WHERE relsectipo.id_tipousuario=5 AND relsectipo.id_secciones = secc.id_secciones AND relsectipo.id_tipousuario= tipo.id_tipousuario

}


function gestionDePlantilla(){
    echo '<h1>Gestión de plantilla: delegado-enternador-coordinador</h1>';//delegado-enternador-coordinador
  //  SELECT secc.slug, relsectipo.id_tipousuario, tipo.tipo_usuario FROM rel_seccionesweb_tipousuario AS relsectipo, seccionesweb AS secc, tipousuario AS tipo WHERE relsectipo.id_tipousuario=3 AND relsectipo.id_secciones = secc.id_secciones AND relsectipo.id_tipousuario= tipo.id_tipousuario
  //  SELECT secc.slug, relsectipo.id_tipousuario, tipo.tipo_usuario FROM rel_seccionesweb_tipousuario AS relsectipo, seccionesweb AS secc, tipousuario AS tipo WHERE relsectipo.id_tipousuario=4 AND relsectipo.id_secciones = secc.id_secciones AND relsectipo.id_tipousuario= tipo.id_tipousuario
  //  SELECT secc.slug, relsectipo.id_tipousuario, tipo.tipo_usuario FROM rel_seccionesweb_tipousuario AS relsectipo, seccionesweb AS secc, tipousuario AS tipo WHERE relsectipo.id_tipousuario=5 AND relsectipo.id_secciones = secc.id_secciones AND relsectipo.id_tipousuario= tipo.id_tipousuario

}



?>