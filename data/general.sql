CREATE DATABASE clubfutbol;
USE clubfutbol;

/*
Como añado el id_tipousuario a cada usuario para que lo reconozca como tal?

*/

CREATE TABLE usuario(
    correo_electronico varchar(50) PRIMARY KEY,
    usuario varchar(50) NOT NULL UNIQUE,
    contrasenya varchar(300) NOT NULL
    id_usuario int(5) AUTO_INCREMENT,
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
    fecha_nacimiento DATE

);

DROP TABLE campos;
CREATE TABLE campos(
    nombre_campo varchar(30) PRIMARY KEY,
    direccion_campo varchar(30) NOT NULL,
    codigo_postal_campo varchar(7) NOT NULL

);


CREATE TABLE equipos(
    id_equipos int(5) PRIMARY KEY AUTO_INCREMENT,
    nombre_equipo varchar(30) NOT NULL UNIQUE,
    categoria varchar(30) NOT NULL,
    descripcion_equipo varchar(300),
    campo_entrenamiento varchar(30) NOT NULL,
    foto_equipo varchar(300) NOT NULL,
    campo_partido varchar(30) NOT NULL,
    
    CONSTRAINT Fk_campo_entrenamiento FOREIGN KEY (campo_entrenamiento) REFERENCES campos(nombre_campo)
);


CREATE TABLE tipousuario(
    id_tipousuario int(2) PRIMARY KEY,
    tipo_usuario varchar(20) NOT NULL,
    slug varchar(20) NOT NULL
);


CREATE TABLE seccionesweb(
    id_secciones int(2) PRIMARY KEY,
    nombre_secciones varchar(30) NOT NULL,
    slug varchar(30) NOT NULL
);


CREATE TABLE rel_usuario_tipousuario(
    id_rel_usu_tipousu int(2) PRIMARY KEY,
    id_usuario int(5) NOT NULL,
    id_tipousuario int(2) NOT NULL,

    CONSTRAINT FK_rel_usu FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    CONSTRAINT FK_rel_tipo FOREIGN KEY (id_tipousuario) REFERENCES tipousuario(id_tipousuario)
);


CREATE TABLE rel_seccionesweb_tipousuario(
    id_rel_secc_tipousu int(2) PRIMARY KEY,
    id_secciones int(2) NOT NULL,
    id_tipousuario int(2) NOT NULL,

    CONSTRAINT FK_rel_secc_tipo FOREIGN KEY (id_secciones) REFERENCES seccionesweb(id_secciones),
    CONSTRAINT FK_rel_tipo_secc FOREIGN KEY (id_tipousuario) REFERENCES tipousuario(id_tipousuario)
);