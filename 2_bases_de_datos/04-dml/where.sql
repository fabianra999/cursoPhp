# Consulta con una condicion #
SELECT  * FROM usuarios WHERE email = 'tomas@gmail.com';

/**
 Operadores de comparacion
 igual:         = ;
 distinto:      != ;
 menor q:       < ;
 mayor q:       > ;
 menor o igual: <= ;
 mayor o igual: >= ;
 entre:         between A and B;
 end :          in;
 es nulo:       is null;
 no nula:       is not null;
 como:          like;
 no es como:    not like;
 */


 /**
 Operadores logicos
 o:  OR;
 y:  AND;
 no: NOT;
  */

  /**
   Comodines
   Cualquier cantidad de caracteres: % ;
   Caracter desconosido: _;
   */

# ejemplo #
#  Mostrar nombre y apellido de usuarios registrados en 2019;
SELECT nombre, apellido FROM usuarios WHERE YEAR(FECHA) = 2019;

#  Mostrar nombre y apellido de usuarios q no se registraton en el 2019;
SELECT nombre, apellido FROM usuarios WHERE YEAR(FECHA) != 2019 OR ISNULL(fecha);

# Mostar apellidos q tengan letra a y clave sea 3216549687
SELECT email FROM usuarios WHERE apellido LIKE '%a%'  AND password = '321654987';

# sacar todos los registros con año impar
SELECT * FROM usuarios WHERE (YEAR(fecha) % 2) = 0;

# sacar registros con nombre mayor a 5 letras antes del 2020 y mostrar en mayuscula

# ordenar por fecha
SELECT * FROM usuarios ORDER BY fecha DESC;
SELECT * FROM usuarios ORDER BY fecha ASC;

# Limitar la cantidad de registros
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE  LENGTH(nombre) > 5 AND YEAR(fecha) < 2020 LIMIT 1;
# Limitar la cantidad de registros DEL 0 AL 5
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE  LENGTH(nombre) > 5 AND YEAR(fecha) < 2020 LIMIT 0,5;
