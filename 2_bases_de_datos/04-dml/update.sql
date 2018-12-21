# Modificar fila | actualizar datos #
UPDATE usuarios SET fecha = CURDATE ()  WHERE id = '4';

# Borrar registro o fila #
DELETE FROM usuarios WHERE id = '1';