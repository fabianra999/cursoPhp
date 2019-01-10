<?php
require_once 'ModeloBase.php';

class Usuario extends ModeloBase{
	public $nombre;
	public $apellidos;
	public $email;
	public $password;
    
    function getNombre() {
		return $this->nombre;
	}

	function getApellidos() {
		return $this->apellidos;
	}

	function getEmail() {
		return $this->email;
	}

	function getPassword() {
		return $this->password;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	function setApellidos($apellidos) {
		$this->apellidos = $apellidos;
	}

	function setEmail($email) {
		$this->email = $email;
	}

	function setPassword($password) {
		$this->password = $password;
    }
    

		public function guardar(){
			$sql = "INSERT INTO usuarios(nombre, apellidos, email, password, fecha) VALUES ('
			"$_POST["nombre"]."','
			".$_POST["apellidos"]."','
			".$_POST["email"]."','
			".$_POST["password"]."','
			".CURDATE()."';'
			');
		
			$guardado = $this->db->query($sql);
			
			return $guardado;
		}

}
