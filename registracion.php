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


<div class="container">
  <div class="row">
    <div id='col-md-4 col-sm-8 col-xs-10'>
      <div class="registration">
        <form id='register' action='confirmacion.php' method='POST'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                
                <div><span class='error'></span></div>
                <div class='section-form'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='section-form'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='section-form'>
                    <label for='edad' >Edad:</label><br/>
                    <input type='text' name='edad' id='edad' value='' maxlength="2" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='section-form'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='section-form' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error'></div>
                </div>
                <div class="section-form">
                <label><input type="checkbox" name="checkbox" id="cbox1" value="first_checkbox"><p class="short_explanation"> Acepto bases y condiciones</p> </label><br>
                </div>
                <div class='section-form-submit'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
          </form>
        </div>
      </div>
    </div> <!-- /.row -->
</div><!-- /.container -->
      <?php require_once("footer.php"); ?>
</body>
</html>

