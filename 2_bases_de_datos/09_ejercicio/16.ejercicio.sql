/*
16. Obtener listado de clientes atendidos por el vendedor 'David Lopez'
 */


# consulta #
SELECT * FROM clientes WHERE vendedor_id = '1';

# consulta con subconsulta #
SELECT * FROM clientes WHERE vendedor_id IN
(SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos = 'Lopez');

# Consulta multitabla#
SELECT CONCAT(v.nombre, ' ', v.apellidos) AS 'vendedor', c.nombre, c.gastado FROM clientes c
INNER JOIN vendedores v ON v.id = c.vendedor_id AND v.nombre = 'David' AND v.apellidos = 'Lopez';
