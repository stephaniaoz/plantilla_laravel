CREATE DATABASE bd_plantillalaravel;

--DROP TABLE usuario 
CREATE TABLE usuario (usuario_codigo bigint, usuario_login varchar, usuario_clave varchar, usuario_nombre varchar, usuario_apellido varchar, usuario_documento varchar, usuario_telefono varchar, usuario_email varchar, usuario_modificacion bigint, estado varchar, fecha_creacion date, fecha_modificacion date, hora_modificacion time,
PRIMARY KEY (usuario_codigo));

--DROP TABLE pais 
CREATE TABLE pais (pais_codigo bigint, pais_nombre varchar, pais_coddane varchar, pais_codiso varchar, usuario_modificacion bigint, estado varchar, fecha_creacion date, fecha_modificacion date, hora_modificacion time,
PRIMARY KEY (pais_codigo),
UNIQUE (pais_nombre));

CREATE TRIGGER tgr_pais_consecutivo BEFORE INSERT OR UPDATE 
    ON pais FOR EACH ROW 
    EXECUTE PROCEDURE fn_pais_consecutivo();


---------------------------------------
-- DROP FUNCTION fn_pais_consecutivo();

CREATE OR REPLACE FUNCTION fn_pais_consecutivo()
  RETURNS trigger AS
$BODY$
	DECLARE i_pais_codigo INTEGER;
BEGIN
	IF TG_OP = 'INSERT' THEN
		i_pais_codigo := 0;
		SELECT INTO i_pais_codigo COUNT(pais_codigo)+1 FROM pais;
		NEW.pais_codigo = i_pais_codigo; 
	END IF;
	RETURN NEW;
END;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;
ALTER FUNCTION fn_pais_consecutivo()
  OWNER TO postgres;

------------------------------------------
