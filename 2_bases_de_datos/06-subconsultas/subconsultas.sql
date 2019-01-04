/**
 -Son consultas q se ejecutan dentro de otras.
 -consiste en utilizar los resultados de la subconsulta pa operar en la consulta principal.
  -Jugando con las claver ajenas | foraneas
  
 */


/*
TIENE REGISTRO => IN
*/
SELECT * FROM blog_master.usuarios WHERE id IN ( SELECT usuario_id FROM blog_master.entradas);
/*
NO TIENE REGISTRO => NOT IN
*/
SELECT * FROM blog_master.usuarios WHERE id NOT IN ( SELECT usuario_id FROM blog_master.entradas);

/**
 Sacar los usuarios que tengas alguna entrada que en su titulo hable de GTA
 */
SELECT * FROM blog_master.usuarios WHERE
  id  IN ( SELECT usuario_id FROM blog_master.entradas WHERE titulo LIKE '%gta%');
SELECT nombre, apellidos FROM blog_master.usuarios WHERE
  id  IN ( SELECT usuario_id FROM blog_master.entradas WHERE titulo LIKE '%gta%');

/**
 Sacar dotas las entradas de la categoria accion utilizando su nombre 
 */
  SELECT * FROM blog_master.entradas WHERE
    categoria_id IN ( SELECT id FROM blog_master.categorias WHERE nombre  = 'Accion');
 SELECT * FROM blog_master.entradas WHERE
    categoria_id IN ( SELECT id FROM blog_master.categorias WHERE id  = 1);

 /**
    Mostrar las categorias con mas de 3 entradas
 */
  # Cantidad de categorias
  SELECT categoria_id, COUNT(categoria_id) FROM blog_master.entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3;
 # Categoria
  SELECT * FROM blog_master.categorias WHERE
  id IN (SELECT categoria_id FROM blog_master.entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);

 
 /**
    Mostrar los usuarios que crearon una entrada el un martes
 */
    SELECT * FROM blog_master.usuarios WHERE id IN
      (SELECT usuario_id FROM blog_master.entradas WHERE fecha="2019-01-02");

    SELECT * FROM blog_master.usuarios WHERE id IN
      (SELECT usuario_id FROM blog_master.entradas WHERE DAYOFWEEK(fecha) = 3);
 
 /**
    Mostrar los usuarios que tenga mas entradas
 */
  SELECT * FROM blog_master.usuarios WHERE id =
    (SELECT usuario_id FROM blog_master.entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);
 
 /**
    Mostrar las categorias sin entradas
 */
 SELECT * FROM blog_master.categorias WHERE id NOT IN
    (SELECT categoria_id FROM blog_master.entradas );