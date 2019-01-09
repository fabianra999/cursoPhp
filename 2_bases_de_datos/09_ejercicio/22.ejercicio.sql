/*
22. Mostrar listado de clientes (numero de cliente y el nombre)
mostrar tambien el numero de vendedor y su nombre.
 */

SELECT  cl.nombre AS 'Cliente', cl.id AS 'numero de cliente', CONCAT(v.nombre, ' ', v.apellidos) AS 'vendedor'FROM
clientes cl,
vendedores v WHERE cl.vendedor_id = v.id;


SELECT  cl.nombre AS 'Cliente', cl.id AS 'numero de cliente', CONCAT(v.nombre, ' ', v.apellidos) AS 'vendedor' FROM  clientes cl
INNER JOIN  vendedores v ON cl.vendedor_id = v.id;