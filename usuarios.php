
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<title>Asienta</title>
</head>
<body>

<?php
	include("funciones.php");
	$usuarios = traerTodosLosUsuarios();
?>

<?php include("header.php"); ?>
		<div class="jumbotron">Mis usuarios</div>
		<ul>
			<?php foreach($usuarios as $usuario) : ?>
				<li>
					<a href="perfilDeUsuario.php?email=<?=$usuario["email"]?>">
						<?=$usuario["email"]?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
			
		
<?php include("footer.php"); ?>
</body>
</html>