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
		header("Location:inicio-sesion.php");exit;
	}
	$email = $_GET["email"]; /*hay un problema*/
	$usuario = traerPorEmail($email);
?>

<?php include("header.php"); ?>
 <div class="row" > 
        <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12" style="background-color: #967760; padding: 30px; margin-top: 80px;
    margin-bottom: 80px;"> 
		<div >Perfil de <?=$usuario["nombre"]?></div>
		<ul>
			<li>Nombre: <?=$usuario["nombre"]?> </li>
			<li>Email: <?=$usuario["email"]?> </li>
		</ul>	
			<div class="form-group">
			<a href="registracion2.php"> Editar perfil</a>
			</div>
		</div>
	</div>
		
<?php include("footer.php"); ?>
</body>
</html>
