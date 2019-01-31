<?php
    //  Conectar a la base de datos
    $conexion = mysqli_connect ("localhost", "root", "", "phpsql");

    // Comprobar la conexion
    if (mysqli_connect_errno ()) {
        echo "la conexion a la base de datos Mysql a fallado: " . mysqli_connect_errno ();
    } else {
        echo "Conexion satisfactoria"."<br/>";
    }

    /**
     * Consulta para configurar la codificacion de caracteres
     */
    mysqli_query ($conexion, "SET NAMES 'UTF8'");

    /**
     * Consulta Select desde php
     */
    $query = mysqli_query ($conexion, "SELECT * FROM notas");
    //var_dump ($notas);

    while ($nota = mysqli_fetch_assoc ($query)){
        //var_dump ($nota);
          echo $nota['titulo']."<br/>";
          echo $nota['descripcion']."<br/>";
    }


    /**
     *  Insertar en la base de datos desde php
     */
       $sql = "INSERT INTO notas VALUES(null, 'Nota 4', 'Hola mundo 4', 'gold')";
       $insert = mysqli_query ($conexion, $sql);
              if ($insert){
                  echo "Datos insertados correctamente";
              } else {
                  echo "Error: ".mysqli_error ($conexion);
              }