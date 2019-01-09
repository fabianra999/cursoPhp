<?php
class UsuarioController {

    public function mostrarTodos() {
        // Modelo
        require_once 'models/usuario.php';
        // Logica controlador
        $usuario = new Usuario() ;
        $usuarios = $usuario->conseguirTodos('usuarios');
        // Vista
        require_once 'views/usuarios/mostrar-todos.php';
    }


    public function crear() {
        require_once 'views/usuarios/crear.php';
    }

}