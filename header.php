

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">

  <title>Asienta</title>
  <link rel="icon" 
      type="image/png" 
      href="images/favicon.png">
</head>
<body>
<script src="https://use.fontawesome.com/c276b8a2b3.js"></script>
<div class="nav-sesion text-right" style="padding-right: 15px;">

          <?php 
          require_once "funciones.php";
          if(!estaLogueado()) : ?>
          
              <a href="registracion.php">Registracion</a>
           
              <a href="inicio-sesion.php">Login</a>
           
          <?php endif; ?>
         
          <?php if (estaLogueado()) : ?>
           
              <a href="logout.php">Logout</a>
            
              <a href="miperfil.php"> Hola <?= obtenerUsuarioLogueado()["Nombre"]; ?> </a>
           
          <?php endif; ?>
        
 
</div>
<nav class="navbar navbar-default navbar-static-top" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand text-light" href="index.php"><img class="logo-nav" src="images/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li class=""><a href="construccion.php">Productos<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="construccion.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Nosotros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="construccion.php">Nuestra Historia</a></li>
            <li><a href="construccion.php">Experiencias</a></li>
            <li><a href="preguntas-frecuentes.php">Preguntas frecuentes</a></li>
            <li><a href="construccion.php">¿Cómo realizar una compra?</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="construccion.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="construccion.php">Exteriores</a></li>
            <li><a href="construccion.php">Living</a></li>
            <li><a href="construccion.php">Comedor</a></li>
             <li><a href="construccion.php">Dormitorio</a></li>
              <li><a href="construccion.php">Accesorio</a></li>
          </ul>
        </li>
        </ul>
          <ul class="nav navbar-nav navbar-left">
            <li><a href="contacto.php">Contacto</a></li>
            
          </ul>
        <ul>
          <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Busqueda">
        </div>
        <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->
</nav>
<?php require_once "js.php"; ?>