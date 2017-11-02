<?php
	$dsn = "mysql:host=localhost;port=3306;dbname=asientadb";
	$user = "root";
	$pass = "";

	$conn = new PDO($dsn, $user, $pass);

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
			//var_dump($_POST["password"]);
			//var_dump(password_hash($_POST["password"],PASSWORD_DEFAULT));
			//var_dump($usuario['Password']);

			if (password_verify($_POST["password"], $usuario["password"]) == false) {
				$arrayDeErrores["password"] = "La contraseña no verifica";
			}
		}

		return $arrayDeErrores;
		//var_dump($arrayDeErrores);
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

	/* VALIDAR EDICION*/

	function validarEdicion($emailActual) {
		$arrayDeErrores = [];

		if ($_POST["nombre"] == "") {
			$arrayDeErrores["nombre"] = "Debes completar el nombre.";
		}

		if ($_POST["email"] == "") {
			$arrayDeErrores["email"] = "Falta rellenar el formato del email.";
		}
		else if(filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL) == false) {
			$arrayDeErrores["email"] = "El mail no existe.";	
		}
		else if (traerPorEmail($_POST["email"]) != null && $_POST["email"] != $emailActual) {
			$arrayDeErrores["email"] = "Ya existe un usuario con este mail.";		
		}

		$usuario = traerPorEmail($emailActual);

		if (password_verify($_POST["oldpassword"], $usuario["password"]) == false) {
			$arrayDeErrores["password"] = "La contraseña anterior debe verificar.";
		}


		if (strlen($_POST["password"]) < 6) {
			$arrayDeErrores["password"] = "La contraseña debe tener al menos 6 caracteres.";	
		} 
		else if ($_POST["password"] != $_POST["cpassword"]) {
			$arrayDeErrores["password"] = "Las contraseñas deben ser iguales";
		}

		
		return $arrayDeErrores;
	}


	function armarUsuario($informacion) {
		return [
			"nombre" => $informacion["nombre"],
			"email" => $informacion["email"],
			"password" => password_hash($informacion["password"], PASSWORD_DEFAULT)

		];
	}
/* GUARDA USUARIO POR JSON
	function guardarUsuario($usuario) {
		$json = json_encode($usuario);
		file_put_contents("usuarios.json", $json . PHP_EOL, FILE_APPEND);
	}*/

	

	function sacarJson() {
		$json=file_get_contents("usuarios.json");
		$usuarios= json_decode($json, true);
		foreach ($usuarios as $usuario) {
			$sql = 'Insert into usuarios values (default, :nombre, :email, :password);';
			$query = $conn->prepare($sql);

			$query->bindValue(":nombre", $usuario["nombre"]);
			$query->bindValue(":email", $usuario["email"]);
			$query->bindValue(":password", $usuario["password"]);

			$query->execute();

		}
	}


	function guardarUsuario($usuario) {
		global $conn;


		$sql = "Insert into usuarios values (default, :nombre, :email, :password);";

		$query = $conn->prepare($sql);

		$query->bindValue(":nombre", $usuario["nombre"]);
		$query->bindValue(":email", $usuario["email"]);
		$query->bindValue(":password", $usuario["password"]);

		$query->execute();

		$usuario["id"] = $conn->lastInsertId();
	}



	function traerTodosLosUsuarios() {
		global $conn;
		$sql = "Select * from usuarios";

		$query = $conn->prepare($sql);

		$query->execute();

		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	function traerPorEmail($email) {
		global $conn;
		$registros;

		try{
			$sql = "select * from usuarios where email = :email;";
			$query = $conn->prepare($sql);
			$query->bindValue(":email", $email);
			$query->execute();
			$registros = $query->fetch(PDO::FETCH_ASSOC);
		}catch(PDOException $Exception){
			var_dump($Excecption);
		}
		return $registros;
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
	function editarUsuario($usuario) {
		global $conn;

		$sql = "UPDATE usuarios set email = :email, nombre = :nombre, password = :password WHERE id = :id;";

		$query = $conn->prepare($sql);

		$query->bindValue(":nombre", $_POST["nombre"]);
		$query->bindValue(":email", $_POST["email"]);
		$query->bindValue(":password", password_hash($_POST["password"], PASSWORD_DEFAULT));
		$query->bindValue(":id", $usuario["id"]);
		
		$query->execute();
	}
?>