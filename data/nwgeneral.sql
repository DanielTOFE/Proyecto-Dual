CREATE DATABASE clubfutbol2;
USE clubfutbol2;

/*
Como añado el id_tipousuario a cada usuario para que lo reconozca como tal?

*/
DROP TABLE rel_usuario_tipousuario;

DROP TABLE usuario;
DROP TABLE EQUIPOS;


CREATE TABLE usuario(
    correo_electronico varchar(50) NOT NULL UNIQUE,
    usuario varchar(50) NOT NULL UNIQUE,
    contrasenya varchar(300) NOT NULL,
    id_usuario int(5) AUTO_INCREMENT PRIMARY KEY,
    dni varchar(9) NOT NULL UNIQUE,
    foto_jugador varchar(255),
    nombre_registro_basico varchar(30) NOT NULL,
    apellido1_registro_basico varchar(30) NOT NULL,
    apellido2_registro_basico varchar(30) NOT NULL,
    telefono_registro_basico int(9) NOT NULL,
    ciudad_registro_basico varchar(20) NOT NULL,
    codigo_postal_registro_basico int(5) NOT NULL,
    sexo ENUM("hombre","mujer") NOT NULL,
    posicion_jugador varchar(20),
    nombre_equipo varchar(30) NOT NULL UNIQUE,
    fecha_nacimiento DATE,
    CONSTRAINT Fk_nombre_equipo FOREIGN KEY (nombre_equipo) REFERENCES equipos(nombre_equipo)

);

ALTER TABLE usuario ADD nombre_equipo varchar(30) NOT NULL UNIQUE;
ALTER TABLE usuario ADD CONSTRAINT Fk_nombre_equipo FOREIGN KEY (nombre_equipo) REFERENCES equipos(nombre_equipo);



INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico, foto_jugador, nombre_registro_basico, apellido1_registro_basico, apellido2_registro_basico, telefono_registro_basico, ciudad_registro_basico, codigo_postal_registro_basico, nombre_equipo) VALUES ("Jordi", "Jordi", "41213229J","Jordi@gmail.com", "", "Jordi", "Fuentes", "Rodriguez", 611525252, "Barcelona", 08020,"Juvenil A");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico, nombre_equipo) VALUES ("lucas2", "luca2s", "41222729L","lu2cas@gmail.com", "Cadete A");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("martin", "martin", "41015729M","martin@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("luis", "luis", "41015727L","luis@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("albert", "albert", "41015729A","albert@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Onkar", "Onkar", "41125729O","Onkar@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Gabri", "Gabri", "41015729G","Gabri@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Alex", "Alex", "41015726A","Alex@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Pedro", "Pedro", "41015729P","Pedro@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Dani", "Dani", "41015749D","Dani@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Marina", "Marina", "45215729M","Marina@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Daniel", "Daniel", "41035729D","Daniel@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Eloy", "Eloy", "41215729E","Eloy@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Ivan", "Ivan", "41015729I","Ivan@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Sergi", "Sergi", "41015729S","Sergi@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Tazim", "Tazim", "41015729T","Tazim@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Manel", "Manel", "41015729M","Manel@gmail.com");
INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Elisabed", "Elisabed", "41015229E","Elisabed@gmail.com");



INSERT INTO usuario (usuario, contrasenya, dni, correo_electronico) VALUES ("Joan", "Joan", "41015729J","Joan@gmail.com");

DROP TABLE campos;
CREATE TABLE campos(
    nombre_campo varchar(30) PRIMARY KEY,
    direccion_campo varchar(30) NOT NULL,
    codigo_postal_campo varchar(7) NOT NULL
    
);
DROP TABLE EQUIPOS;
CREATE TABLE equipos(
    id_equipos int(5) PRIMARY KEY AUTO_INCREMENT,
    nombre_equipo varchar(30) NOT NULL UNIQUE,
    categoria varchar(30) NOT NULL,
    descripcion_equipo varchar(300),
    campo_entrenamiento varchar(30) NOT NULL,
    usuario varchar(50) NOT NULL UNIQUE,

    CONSTRAINT Fk_usuario FOREIGN KEY (usuario) REFERENCES usuario(id_usuario),

    CONSTRAINT Fk_campo_entrenamiento FOREIGN KEY (campo_entrenamiento) REFERENCES campos(nombre_campo)
);
INSERT INTO campos VALUES ("Menorca", "C/Menorca 7-11", 08020);
INSERT INTO campos VALUES ("Andrade", "C/ Andrade 154 Cruillas C/ Treball i Selva de Mar", 08020);
INSERT INTO campos VALUES ("Maresme", "C/ Puigcerdà, 56", 08019);
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (1, "Juvenil A", "Preferente", "futbol 11", "Menorca");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (2, "Juvenil B", "Primera", "futbol 11", "Menorca");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (3, "Juvenil C", "Segunda", "futbol 11", "Menorca");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (4, "Cadete A", "Preferente", "futbol 11", "Andrade");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (5, "Cadete B", "Primera", "futbol 11", "Menorca");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (6, "Cadete C", "Primera", "futbol 11", "Maresme");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (7, "Infantil A", "Preferente", "futbol 11", "Andrade");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (8, "Infantil B", "Primera", "futbol 11", "Menorca");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (9, "Infantil C", "Segunda", "futbol 11", "Maresme");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (10, "Alevin A", "Primera", "futbol 7", "Andrade");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (11, "Alevin B", "Segunda", "futbol 7", "Maresme");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (12, "Alevin C", "Segunda", "futbol 7", "Menorca");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (13, "Benjamin A", "Primera", "futbol 7", "Andrade");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (14, "Benjamin B", "Segunda", "futbol 7", "Menorca");
INSERT INTO equipos (id_equipos, nombre_equipo, categoria, descripcion_equipo, campo_entrenamiento) VALUES (0, "Sin asignar", "Sin asignar", "Sin asignar", "Menorca");


CREATE TABLE tipousuario(
    id_tipousuario int(2) PRIMARY KEY,
    tipo_usuario varchar(20) NOT NULL,
    slug varchar(20) NOT NULL
);

INSERT INTO `tipousuario` (`id_tipousuario`, `tipo_usuario`, `slug`) VALUES
(1, 'usuario', 'default'),
(2, 'jugador', 'participar'),
(3, 'delegado', 'administrar-jugadore'),
(4, 'entrenador', 'administrar-jugadore'),
(5, 'coordinador', 'cordinar-equipos'),
(6, 'administrador', 'administrar-web');
DROP TABLE seccionesweb;

CREATE TABLE seccionesweb(
    id_secciones int(2) PRIMARY KEY,
    nombre_secciones varchar(30) NOT NULL,
    slug varchar(30) NOT NULL,
    icon_secciones varchar(128)
);
INSERT INTO `seccionesweb` (`id_secciones`, `nombre_secciones`, `slug`, `icon_secciones`) VALUES
(1, 'Gestion de usuarios', 'gestion-de-usuarios', 'fa fa-user'),
(2, 'Gestion de equipos', 'gestion-de-equipos', 'fas fa-sitemap'),
(3, 'Gestion de campos', 'gestion-de-campos', 'far fa-futbol'),
(4, 'Gestion de plantilla', 'gestion-de-plantilla', 'fas fa-address-book'),
(5, 'Gestion de asistencia', 'aceptar-convocatoria', 'as fa-amilia');

DROP TABLE rel_usuario_tipousuario;

CREATE TABLE rel_usuario_tipousuario(
    id_rel_usu_tipousu int(2) PRIMARY KEY AUTO_INCREMENT,
    id_usuario int(5) NOT NULL,
    id_tipousuario int(2) NOT NULL,

    CONSTRAINT FK_rel_usu FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    CONSTRAINT FK_rel_tipo FOREIGN KEY (id_tipousuario) REFERENCES tipousuario(id_tipousuario)
);

INSERT INTO `rel_usuario_tipousuario` (`id_rel_usu_tipousu`, `id_usuario`, `id_tipousuario`) VALUES
(0, 3, 1),
(1, 3, 2),
(2, 3, 3),
(3, 3, 4),
(4, 3, 5),
(5, 3, 6),
(6, 10, 2);
DROP TABLE rel_seccionesweb_tipousuario;
CREATE TABLE rel_seccionesweb_tipousuario(
    id_rel_secc_tipousu int(2) PRIMARY KEY,
    id_secciones int(2) NOT NULL,
    id_tipousuario int(2) NOT NULL,

    CONSTRAINT FK_rel_secc_tipo FOREIGN KEY (id_secciones) REFERENCES seccionesweb(id_secciones),
    CONSTRAINT FK_rel_tipo_secc FOREIGN KEY (id_tipousuario) REFERENCES tipousuario(id_tipousuario)
);

INSERT INTO `rel_seccionesweb_tipousuario` (`id_rel_secc_tipousu`, `id_secciones`, `id_tipousuario`) VALUES
(1, 1, 6),
(2, 2, 3),
(3, 2, 4),
(4, 3, 5),
(5, 4, 3),
(6, 4, 4),
(7, 5, 2);