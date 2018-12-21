/**
Tipos de datos
int (# cifras)                    ENTERO
integer (# cifras)                ENTERO (maximo 4294967295)
varchar (# caractees)             STRING / ALFANUMERICO (maximo 255)
char (# caracteres)               STRING / ALFANUMERICO
floas (# cifras, # decimales)     DECINAL / COMA FLOTANTE
date, time, timestamp

// String mas grandes
TEXT  65535
MEDIUMTEXT  16 millones
LONGTEXT  4 billones de caracteres

// Enteros mas grandes
MEDIUMINT
BIGINT

 */

/**
 Crear Tabla
 */
CREATE TABLE usuarios(
  id          int(11) auto_increment not null,
  nombre      varchar(100) not null,
  apellidos   varchar(255) default 'Hola mundo',
  email       varchar(100) not null,
  password    varchar(255),
  CONSTRAINT pk_usuarios PRIMARY KEY(id)
);