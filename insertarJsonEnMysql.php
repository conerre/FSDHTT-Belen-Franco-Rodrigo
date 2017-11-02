<?php

require_once("funciones.php");

?>
<form method="post">
<button class="btn btn-primary" type="submit">Importar datos json a la base de datos.</button>
	<?php  
		if(isset($_POST)) {
			sacarJson();
		}

	?>

</form>