/*
Consulta multitabla
Son consultas que sirven para consultar varias tablas en una sola sentencia
 */

 # Mostrar las entradas con el nombre del autor y la categoria #
SELECT e.id, e.titulo, c.nombre AS 'Categoria', u.nombre AS 'Autor', e.fecha AS 'Fecha Creacion'  FROM  blog_master
.categorias c, blog_master.usuarios u, blog_master.entradas e
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

# inner join#
SELECT e.id, e.titulo, c.nombre AS 'Categoria', u.nombre AS 'Autor', e.fecha AS 'Fecha Creacion'
FROM  blog_master.entradas e
INNER JOIN blog_master.usuarios u ON e.usuario_id = u.id
INNER JOIN blog_master.categorias c ON e.categoria_id = c.id;


# Mostar el nombre de las categorias y cuantas entradas tiene#
SELECT c.nombre, COUNT(e.id) FROM blog_master.categorias c, blog_master.entradas e
  WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

# INNER  join#
SELECT c.nombre, COUNT(e.id) FROM categorias c
LEFT JOIN entradas e ON entradas.categoria_id = c.id
GROUP BY e.categoria_id;

SELECT categorias.nombre, COUNT(entradas.id) FROM categorias
LEFT JOIN entradas ON entradas.categoria_id = categorias.id
GROUP BY entradas.categoria_id;

SELECT categorias.nombre, COUNT(entradas.id) FROM categorias
INNER JOIN entradas ON entradas.categoria_id = categorias.id
GROUP BY entradas.categoria_id;


SELECT c.nombre, COUNT(e.id) FROM entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id
GROUP BY e.categoria_id;


# Mostrar el ymail de los usuarios y cuantas entradas tiene #
SELECT u.email, COUNT(e.id) FROM blog_master.usuarios u, blog_master.entradas e
  WHERE e.usuario_id = u.id GROUP BY e.usuario_id;