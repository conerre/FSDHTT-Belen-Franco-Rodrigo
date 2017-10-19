
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