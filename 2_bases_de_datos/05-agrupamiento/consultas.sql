# Consulta de agurpamiento #
SELECT titulo, categoria_id FROM entradas GROUP BY categorias_id;
SELECT  COUNT(titulo) AS 'Numero de entradas',  categoria_id FROM blog_master.entradas GROUP BY categoria_id;
# Consulta de agurpamiento con condiciones #
SELECT  COUNT(titulo) AS 'Numero de entradas',  categoria_id FROM blog_master.entradas GROUP BY categoria_id HAVING count(titulo) >= 3;
