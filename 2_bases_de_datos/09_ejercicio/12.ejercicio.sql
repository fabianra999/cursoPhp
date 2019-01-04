/*
12. Conseguir la masa salarial del concesionario (anual)
 */
SELECT SUM(sueldo) AS 'salario anual 2019'  FROM vendedores WHERE YEAR(fecha) = '2019';