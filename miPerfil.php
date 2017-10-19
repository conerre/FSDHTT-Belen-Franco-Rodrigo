<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">

  <title>Asienta</title>
</head>
<body>
<?php
	include("funciones.php");

	if (!estaLogueado()) {
		header("Location:index.php");exit;
	}
	
	$usuario = obtenerUsuarioLogueado();
?>

<?php include("header.php"); ?>
		<div class="jumbotron">Perfil de <?=$usuario["nombre"]?></div>
		<ul>
			<li>Nombre: <?=$usuario["nombre"]?> </li>
			<li>Email: <?=$usuario["email"]?> </li>
		</ul>	
				
			
		
<?php include("footer.php"); ?>
</body>
</html>