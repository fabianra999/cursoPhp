<?php
class IndexController {

    public function mostrarTodos() {
        // Modelo
        require_once 'models/index.php';
        // Logica controlador
        $usuario = new Usuario();
        $usuarios = $usuario->conseguirTodos('usuarios');
        // Vista
        require_once 'views/index/mostrar-todos.php';
    }

    public function crear() {
        // Modelo
        require_once 'models/index.php';
        // Vista
        require_once 'views/index/crear.php';

         //echo $usuario->db->error;
        //die();
        //print_R($_POST);
        if (!empty($_POST)) {
            if (isset($_POST['nombre'])) {
                require_once 'models/index.php';
                $usuario = new Usuario;
                $usuario->setNombre($_POST['nombre']);
                $usuario->setApellidos($_POST['apellidos']);
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);
                $guardar = $usuario->guardar();

                header("Location: index.php?controller=Usuario&action=mostrarTodos");

                /* $data = array(
                    'id' => null,
                    'nombre' => $_POST['nombre'],
                    'apellidos' => $_POST['apellidos'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                    'fecha' => $_POST['fecha'],
                );
               echo implode(",", $data);
                var_dump($data); */
            } else {
                echo 'Hola mundo ';

            }
        }
    }

    public function posttest()
    {
        echo "Hola post?";
        if (isset($_POST['nombre'])) {
            echo 'Hola mundo';
        } else {
            echo 'Hola mundo 2';

        }
    }
}