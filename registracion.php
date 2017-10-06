
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<title>Aisienta</title>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a href="index.php"><img class="logo-sesion" src="images/logo.png"></a>
    </div>
  </div><!-- /.container-fluid -->
</nav>
   <div class="row"> 
        <div class="col-md-offset-4 col-md-4"> 
            <div class="form-login" style="background-color: #967760; padding: 30px; margin: 80px 72px;"> 
            <h4 style="color: white;">Registrarse</h4> 
            <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="nombre completo" /> 
            </br> 
            <input type="email" id="userEmail" class="form-control input-sm chat-input" placeholder="email" /> 
            </br> 
            <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="contraseña" /> 
            </br> 
            <input type="password" id="userPasswordC" class="form-control input-sm chat-input" placeholder="confirmar contraseña" /> 
            </br> 
            <div class="wrapper"> 
            <span class="group-btn">      
                <a href="#" class="btn btn-default btn-md"> Ingresar <i class="fa fa-sign-in"></i></a> 
            </span> 
            </div> 
            </div> 
         
        </div> 
      </div> 
    </div> <!-- /.row --> 
</div><!-- /.container --> 

      <?php require_once("footer.php"); ?>
</body>
</html>

