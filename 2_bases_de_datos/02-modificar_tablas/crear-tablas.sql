# Renombrar una tabla #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# Cambiar el nombre de una comuna #
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# Modificar una colomna pero sin cambiar nombre #
ALTER TABLE usuarios_renom MODIFY apellido char(40) not null;

# Añadir columna #
ALTER TABLE  usuarios_renom ADD website varchar(100) null;

# Añadir restriccion a columna
ALTER TABLE  usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# Borrar una columna #
ALTER TABLE  usuarios_renom DROP website;