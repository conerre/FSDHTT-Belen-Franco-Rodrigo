
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
  require_once("funciones.php");

  if (estaLogueado()) {
    header("Location:index.php");exit;
  }

  if ($_POST) {
    $arrayDeErrores = validarLogin();

    if (count($arrayDeErrores) == 0) {
      loguear($_POST["email"]);

      if (isset($_POST["recordame"])) {
        setcookie("usuarioLogueado", $_POST["email"], time()+60*60*24*30);
      }

      header("Location:perfilDeUsuario.php?email=" . $_POST["email"]);
    }
  }

?>

<?php include("header.php"); ?>



    <div class="row"> 
        <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12" style="background-color: #967760; padding: 30px 40px; margin-top: 40px; margin-bottom: 40px;"> 

            <label style="text-align: center;"><h3>Iniciar sesión</h3></label>
    <?php if(isset($arrayDeErrores)) : ?>
      <ul class="errores">
        <?php foreach($arrayDeErrores as $error) : ?>
          <li>
            <?=$error?>
          </li>
        <?php endforeach;?>
      </ul>
    <?php endif; ?>
    <form action="inicio-sesion.php" method="POST">
      <div class="form-group">
       
        <input class="form-control" type="text" name="email" placeholder="email" />
      </div>
      <div class="form-group">
      
        <input class="form-control input-sm chat-input" type="password" name="password" placeholder="contraseña" />
      </div>
      <div class="form-group">
        <a href="#" style="color: white; font-size:11px; "><p>Olvidé mi contraseña</p></a>
      </div>
      <div class="form-group" style="color: white;">
         <input type="checkbox" name="recordame"> Recordar usuario
      </div>

      <div class="form-group">
        <button class="btn btn-default" type="submit">Ingresar</button>
      </div>
       <div class="form-group">
        <a href="registracion.php" style="color: white; font-size:11px; "><p>Crear cuenta</p></a>
      </div>
    </form>

 
    </div> 
</div> 
      <?php require_once("footer.php"); ?>
</body>
</html>

