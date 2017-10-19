
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