/*
13. Sacar la media de sueldos entre todos los vendedores por grupo

AVG()  => function para sacar la media;
CEIL()  => function para quitar decimales;
 */


# Consulta a solo tabla vendedores #
SELECT  AVG(sueldo), grupo_id  FROM vendedores GROUP BY grupo_id;

# Consulta a tablas vendedores y grupos #
SELECT  AVG(v.sueldo), v.grupo_id, g.nombre, g.ciudad  FROM vendedores v
INNER JOIN  grupos g ON  g.id = v.grupo_id
GROUP BY grupo_id;