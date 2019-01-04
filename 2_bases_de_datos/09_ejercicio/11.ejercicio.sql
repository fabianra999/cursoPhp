/*
11. Visualizar todos los cargos y el numero de vendedores que hay en cada cargo
 */
SELECT cargo, COUNT(id) AS 'Cantidad E.' FROM vendedores GROUP BY cargo;