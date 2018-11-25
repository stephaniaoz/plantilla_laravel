CREATE DATABASE bd_plantillalaravel;

CREATE TABLE usuario (usuario_codigo bigint, usuario_login varchar, usuario_clave varchar, usuario_nombre varchar, usuario_apellido varchar, usuario_documento varchar, usuario_telefono varchar, usuario_email varchar, usuario_modificacion bigint, estado varchar, fecha_creacion date, fecha_modificacion date, hora_modificacion time,
PRIMARY KEY (usuario_codigo));

CREATE TABLE pais (pais_codigo bigint, pais_nombre varchar, pais_coddane varchar, pais_codiso varchar, usuario_modificacion bigint, estado varchar, fecha_creacion date, fecha_modificacion date, hora_modificacion time,
PRIMARY KEY (pais_codigo));