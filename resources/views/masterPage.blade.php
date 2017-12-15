<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/css/estilos.css">
      <link rel="stylesheet" type="text/css" href="/css/animaciones-y-random.css">
      <title>Asienta</title>
      <link rel="icon" type="/image/png" 
         href="images/favicon.png">
   </head>
   <body>
      <header>
         <script src="https://use.fontawesome.com/c276b8a2b3.js"></script>
         <div class="nav-sesion text-right" style="padding-right: 15px;">
            @if(session('usuario') and session('usuario')->type==1)
            Hola <a href="perfil">{{session('usuario')->first_name}}</a>
            <a href="/carrito">Mi carrito</a>
            <a href="/logout">Logout</a>
            @endif
            @if(session('usuario') and session('usuario')->type==2)
            Hola Admin<a href="/perfil"> {{session('usuario')->first_name}}</a>
            <a href="/carrito">Mi carrito</a>
            <a href="/adminPanel">Panel</a>
            <a href="/logout">Logout</a>
            @endif  
            @if(!session('usuario'))
            <a href="/register">Registración</a>
            <a href="/login">Login</a>
            @endif
         </div>
         <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand text-light" href="/"><img class="logo-nav" src="../images/logo.png"></a>
               </div>
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-left">
                     <li class="dropdown">
                        <a href="construccion.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Nosotros <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="/nuestraHistoria">Nuestra Historia</a></li>
                           <li><a href="/experiencias">Experiencias</a></li>
                           <li><a href="/preguntasFrecuentes">Preguntas frecuentes</a></li>
                        </ul>
                     </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-left">
                     <li class="dropdown">
                        <a href="construccion.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           @foreach(Request::get('categories')  as $category)
                           <li><a href="/categoría/{{$category->id}}">{{$category->name}}</a></li>
                           @endforeach
                        </ul>
                     </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-left">
                     <li><a href="/contacto">Contacto</a></li>
                  </ul>
                  <ul>
                     <form class="navbar-form navbar-right search" action="/buscador" method="GET">
                           <input type="text" class="form-control searcher" name="buscador" placeholder="Búsqueda..">
                           <button type="submit" class="btn btn-defaul hidden-xs" value="buscar"><i class="fa fa-search hidden-xs" aria-hidden="true"></i></button>
                           {{csrf_field()}}
                     </form>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <div class="wrapper">
         @yield("principal")
      </div>
      <footer>
         <div class="container-fluid">
            <div class="row">
               <div class="p-4 col-md-4 foot">
                  <h4 class="mb-4 text-white">Sitio</h4>
                  <ul class="list-unstyled">
                     <a href="index.php" class="text-white"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
                     <br>
                     <a href="#" class="text-white">Nosotros</a>
                     <br>
                     <a href="/preguntasFrecuentes" class="text-white">Preguntas fecuentes</a>
                     <br>
                     <a href="/comentarios" class="text-white">Comentarios</a>
                  </ul>
               </div>
               <div class="p-4 col-md-4 foot">
                  <h4 class="mb-4">Contacto</h4>
                  <p>
                     <a href="tel:+246 - 542 550 5462" class="text-white"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+549xxxxxxxxxx</a>
                  </p>
                  <p>
                     <a href="mailto:info@pingendo.com" class="text-white"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@asienta.com</a>
                  </p>
                  <p>
                     <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="blank"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Alguna dirección</a>
                  </p>
               </div>
               <div class="p-4 col-md-4 foot">
                  <h4 class="mb-4 text-light">Suscribite</h4>
                  <form>
                     <fieldset class="form-group text-white"> <label for="exampleInputEmail1">A nuestro newsletter</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> 
                     </fieldset>
                     <button type="submit" class="btn btn-outline-light">Enviar</button>
                  </form>
               </div>
            </div>
         </div>
         <h6 style="color: grey; margin-top: 30px;">Copyright &copy; 2017 {Asienta}</h6>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/producto.js"></script>
   </body>
</html>