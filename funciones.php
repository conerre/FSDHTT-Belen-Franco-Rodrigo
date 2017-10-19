<?php
	session_start();

	if (isset($_COOKIE["usuarioLogueado"]) && !estaLogueado()) {
		loguear($_COOKIE["usuarioLogueado"]);
	}

	function validarLogin() {
		$arrayDeErrores = [];


		if ($_POST["email"] == "") {
			$arrayDeErrores["email"] = "Falta completar tu email de contacto";
		}
		else if(filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL) == false) {
			$arrayDeErrores["email"] = "El mail no existe";	
		}
		else if (traerPorEmail($_POST["email"]) == null) {
			$arrayDeErrores["email"] = "El mail no ha sido registrado";
		}
		else {
			//El mail existe!!
			$usuario = traerPorEmail($_POST["email"]);

			if (password_verify($_POST["password"], $usuario["password"]) == false) {
				$arrayDeErrores["password"] = "La contraseña no verifica";
			}
		}

		return $arrayDeErrores;
	}

	function validarInformacion() {
		$arrayDeErrores = [];

		$nombreArchivo = $_FILES["avatar"]["name"];

		$extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

		if ($_FILES["avatar"]["error"] != UPLOAD_ERR_OK) {
			$arrayDeErrores["avatar"] = "La imagen no se subió. Intente nuevamente";
		}
		else if ($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension != "png") {
			$arrayDeErrores["avatar"] = "La foto no tiene un formato válido";
		}

		if ($_POST["nombre"] == "") {
			$arrayDeErrores["nombre"] = "Falta completar con tu nombre";
		}

		if ($_POST["email"] == "") {
			$arrayDeErrores["email"] = "Falta completar con tu email";
		}
		else if(filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL) == false) {
			$arrayDeErrores["email"] = "El FORMATO del mail esta mal";	
		}
		else if (traerPorEmail($_POST["email"]) != null) {
			$arrayDeErrores["email"] = "El mail está repetido";		
		}

		if (strlen($_POST["password"]) < 6) {
			$arrayDeErrores["password"] = "La contraseña tiene que tener mínimo 6 carácteres";	
		} 
		else if ($_POST["password"] != $_POST["cpassword"]) {
			$arrayDeErrores["password"] = "Las contraseñas no verifican";
		}
		
		return $arrayDeErrores;
	}

	function armarUsuario($informacion) {
		return [
			"nombre" => $informacion["nombre"],
			"email" => $informacion["email"],
			"password" => password_hash($informacion["password"], PASSWORD_DEFAULT),

		];
	}

	function guardarUsuario($usuario) {
		$json = json_encode($usuario);
		file_put_contents("usuarios.json", $json . PHP_EOL, FILE_APPEND);
	}

	function traerTodosLosUsuarios() {
		$archivo = fopen("usuarios.json", "r");

		$linea = fgets($archivo);

		$usuarios = [];

		while($linea != false) {

			$array = json_decode($linea, true);
			$usuarios[] = $array;

			$linea = fgets($archivo);
		}

		return $usuarios;
	}

	function traerPorEmail($email) {
		$archivo = fopen("usuarios.json", "r");

		$linea = fgets($archivo);

		while($linea != false) {

			$array = json_decode($linea, true);
			
			if ($array["email"] == $email) {
				return $array;
			}
			$linea = fgets($archivo);
		}

		return null;
	}

	function loguear($email) {
		$_SESSION["usuarioLogueado"] = $email;
	}

	function estaLogueado() {
		if (isset($_SESSION["usuarioLogueado"])) {
			return true;
		}
		else {
			return false;
		}
	}

	function logout() {
		session_destroy();
		setcookie("usuarioLogueado", "", -1);
	}

	function obtenerUsuarioLogueado() {
		if (estaLogueado()) {
			$email = $_SESSION["usuarioLogueado"];
			return traerPorEmail($email);
		} else {
			return null;
		}
	}
?>