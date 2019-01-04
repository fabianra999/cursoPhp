/*
12. Conseguir la masa salarial del concesionario (anual)
 */
SELECT SUM(sueldo) AS 'salario anual' FROM vendedores WHERE YEAR(fecha) = '2019';