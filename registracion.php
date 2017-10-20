<?php
require_once("funciones.php");

  if (estaLogueado()) {
    header("Location:index.php");
    exit;
  }


  $nombreDefault = $_POST ? $_POST["nombre"] : "";
  $emailDefault = $_POST ? $_POST["email"] : "";
  
  /*
  if ($_POST){
    $nombreDefault = $_POST["nombre"];
  }
  else {
    $nombreDefault = "";
  }
  */

  //Si el tipo envió información
  if ($_POST) {
    // Validar
    $arrayDeErrores = validarInformacion();

    //Si no hay errores
    if (count($arrayDeErrores) == 0) {
      //Registrar
      $usuario = armarUsuario($_POST);

      guardarUsuario($usuario);

      //Subir la foto
      $nombreArchivo = $_FILES["avatar"]["name"];

      $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

      $nombre =  "images/" . $_POST["email"] . ".$extension"; 
      $archivo = $_FILES["avatar"]["tmp_name"];
      move_uploaded_file($archivo, $nombre);

      //Redirigir a la confirmacion

      loguear($_POST["email"]);
      
      header("Location:index.php");exit;
    }
  }
?>

<?php require_once "header.php";  ?>
   <div class="row" > 
        <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12" style="background-color: #967760; padding: 30px; margin-top: 80px;
    margin-bottom: 80px;"> 
          
          <label style="text-align: center;"><h3>Registración</h3></label>
      
            <?php if(isset($arrayDeErrores)) : ?>
              <ul class="errores">
                <?php foreach($arrayDeErrores as $error) : ?>
                  <li>
                    <?=$error?>
                  </li>
                <?php endforeach;?>
              </ul>
            <?php endif; ?>
    <form method="POST" action="registracion.php" enctype="multipart/form-data">
      
      <div class="form-group">
        <input class="form-control" type="text" name="nombre" value="<?=$nombreDefault?>" placeholder="Nombre"/>
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="email" value="<?=$emailDefault?>" placeholder="Email"/>
      </div>
      <div class="form-group">
        <input class="form-control" type="password" name="password" placeholder="Contraseña">
      </div>
        <div class="form-group">
          <input class="form-control" type="password" name="cpassword" placeholder="Confirmar contraseña">
        </div>
      <div class="form-group" style="color: white;">
        Subir foto de perfil <input type="file" name="avatar" >
      </div>
      <div class="form-group">
        <button class="btn btn-default" type="submit">Registrar</button>
      </div>
  
       <div class="form-group">
        <a href="inicio-sesion.php" style="color: white; font-size:11px; "><p>Ya tengo una cuenta, iniciar sesión.</p></a>
      </div>
    </form>


        </div> 
    </div> <!-- /.row --> 
      <?php require_once("footer.php"); ?>
</body>
</html>