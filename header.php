<script src="https://use.fontawesome.com/c276b8a2b3.js"></script>
<div class="nav-sesion text-right">
  <a href="inicio-sesion.php">Iniciar Sesión</a>
  <a href="registracion.php">Registrar</a>
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
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Productos<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Nostros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Nuestra Historia</a></li>
            <li><a href="#">Experiencias</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->
  <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Busqueda">
        </div>
        <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
</nav>