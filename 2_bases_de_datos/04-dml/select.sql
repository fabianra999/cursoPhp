# Mostrar todos los registros | filas de una tabla #
SELECT email, nombre, apellidos FROM usuarios;

# Mostrar todos los campos #
SELECT * FROM usuarios;

# Operadores aritmeticos #
SELECT nombre, (7+7) AS 'operaciones' FROM usuarios;
SELECT nombre, (id+7) AS 'operaciones' FROM usuarios;
SELECT nombre, (7-7) AS 'operaciones' FROM usuarios;
SELECT nombre, (id-7) AS 'operaciones' FROM usuarios;
SELECT nombre, (7*7) AS 'operaciones' FROM usuarios;
SELECT nombre, (id*7) AS 'operaciones' FROM usuarios;
SELECT nombre, (7/7) AS 'operaciones' FROM usuarios;
SELECT nombre, (id/7) AS 'operaciones' FROM usuarios;
SELECT nombre, (7%7) AS 'operaciones' FROM usuarios;
SELECT nombre, (id%7) AS 'operaciones' FROM usuarios;

# Ordenar la consulta #
SELECT * FROM usuarios ORDER BY id;
# Ordenar la consulta decentente #
SELECT * FROM usuarios ORDER BY id DESC;
# Ordenar la consulta acendente #
SELECT * FROM usuarios ORDER BY id ASC;


# funciones matematicas #

# funciones texto #
# Malluscula:
SELECT UPPER(nombre) FROM usuarios;
# Minuscula:
SELECT LOWER(nombre) FROM usuarios;
# concatenar:
SELECT CONCAT(nombre, ' ', apellidos) AS 'conversion' FROM usuarios;
# longitud cadena de texto
SELECT LENGTH(CONCAT(nombre, ' ', apellidos)) FROM usuarios;
# Limpiar espacios
SELECT TRIM(CONCAT(nombre, ' ', apellidos)) FROM usuarios;


# Fechas #
SELECT email, fecha, CURDATE() AS 'Fecha actual' FROM usuarios;
# Diferencia de fechas
SELECT nombre, DATEDIFF(fecha, CURDATE()) AS 'Diferencia en dias' FROM usuarios;
# Nombre del dia
SELECT nombre, DAYNAME(fecha) AS 'Dia' FROM usuarios;


# Funciones generalas #


# si hay nulos
SELECT nombre, ISNULL(fecha) FROM usuarios;
# igualdad de campos
SELECT nombre, strcmp('hola', 'hola') FROM usuarios;

# Usuaria sjb
SELECT USER() FROM usuarios;

# Solo muestra un registro repetido
SELECT DISTINCT USER() FROM usuarios;

# Base de datos
SELECT DATABASE() FROM usuarios;

# sI ES NULL
SELECT IFNULL(apellido, 'Este campo esta vacio') FROM usuarios;