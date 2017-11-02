
<?php
	include("funciones.php");

	if (!estaLogueado()) {
		header("Location:index.php");exit;
	}
	
	$usuario = obtenerUsuarioLogueado();
?>

<?php include("header.php"); ?>
		<div class="jumbotron">Perfil de <?=$usuario["Nombre"]?></div>
		<ul>
			<li>Nombre: <?=$usuario["Nombre"]?> </li>
			<li>Email: <?=$usuario["Mail"]?> </li>
		</ul>	
				
			
		
<?php include("footer.php"); ?>
</body>
</html>