# insert para categorias #
DESC   categorias;
INSERT INTO categorias VALUES(null, 'Accion');
INSERT INTO categorias VALUES(null, 'Rol');
INSERT INTO categorias VALUES(null, 'Deportes');

# insert para entradas #
INSERT INTO entradas  VALUES(null, 1, 1, 'GTA 5', 'Hola mundo',CURDATE());


INSERT INTO entradas VALUES(null, 1, 1, 'GTA 5', 'Hola mundo', CURDATE());
INSERT INTO entradas VALUES(null, 1, 2, 'GTA 4', 'Hola mundo', CURDATE());
INSERT INTO entradas VALUES(null, 1, 3, 'GTA 3', 'Hola mundo', CURDATE());

INSERT INTO entradas VALUES(null, 2, 1, 'FIFA 5', 'Hola mundo', CURDATE());
INSERT INTO entradas VALUES(null, 2, 2, 'FIFA 4', 'Hola mundo', CURDATE());
INSERT INTO entradas VALUES(null, 2, 3, 'FIFA 3', 'Hola mundo', CURDATE());

INSERT INTO entradas (id, usuario_id, categoria_id, titulo, descripcion, fecha) VALUES(null, 3, 1, 'PES 5', 'Hola mundo', CURDATE());
INSERT INTO entradas VALUES(null, 3, 2, 'PES 4', 'Hola mundo', CURDATE());
INSERT INTO entradas VALUES(null, 3, 3, 'PES 3', 'Hola mundo', CURDATE());
