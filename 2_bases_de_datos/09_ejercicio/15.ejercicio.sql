/*
15. Mostrar los clientes que más encargos han hecho y mostrar cuantos hicieron
 */

SELECT cliente_id, COUNT(id) FROM  encargos  GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;


SELECT c.nombre, COUNT(e.id) FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;