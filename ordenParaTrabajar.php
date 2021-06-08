<?php

                                                -------------------
                                                | CORRECCION DUAL |
                                                -------------------


--WEB
--FALTA-- 1-/equpipos  --> boton ver cada plantilla (ver cuadricula de la plantilla, nombre posicion.)


--PanelAdmin
--echo--1-Gestion de equipos --> añadir, eliminar equipo 
--echo--2-Gestion de plantilla. mostrar --> boton ver cada plantilla (ver cuadricula de la plantilla, nombre posicion.) 
--echo--3-Gestion de campos, añadir borrar editar




-POR HACER-
- Gestion de usuario, no repetir usuarios. mostrar los roles de cada uno.
- añadir el boton de, añadir rol, eliminar rol.




preguntas quim -> 
Eliminar gestion-de-equipos con el boton.
drop * from equipos where id_equipos = $id_equipos?

/* 
orden de gestion:
1- usuarios
2- equpipos
3- plantilla
4- asistencia
5- campos


LA BBDD tiene que tener en usuario ROL!<
^ lo tiene en las tablas relacionales, usuario - tipousuario.


cambiado index.php a adminheader y adminfooter y se llama como en paneladmin/dist/menu/editPLantillas.php
la llamada 





DUDAS ---

- PONER BOTON REDIRIGE A X PAGINA EN EL WHILE.
- no carga el header bien desde view/inicioSesion.php 
*/
//

                                                    -------------------
                                                    | EXPOSICION DUAL |
                                                    -------------------


                                    Register, Login.

                                    Login con Admin -> Dar ROL  de jugador a un usuario desde panel admin.

                                    Con admin -> Meter ese jugador en un equipo desde panel admin.

                                    Con admin -> Crear un equipo desde panel admin desde el panel admin.

                                    Con un coordinador -> Meter un jugador en la plantilla de ese nuevo equipo.

                                    Con el coordinador -> Borrar el jugador metido desde el panel admin.

                                    Con el admin -> Borrar el equipo creado desde el panel admin.

                                    

                                   // Con el jugador -> Aceptar convocatoria usuario. (ULTIMO) desde el panel admin.
?>
