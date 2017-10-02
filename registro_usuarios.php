<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>

    <?php
            require_once("funciones.php");

            if ($_POST) {
                //validar 
                $arrayDeErrores = validarInformacion();

                // si no hay errores
                if (count($arrayDeErrores) ==0 ) {
                    //registrar
                    //redirigir a la confirmacion
                    header("Location:confirmacion.php"); exit;
                }
            }
            if(isset($arrayDeErrores)) ?>
            <ul>
                <?php foreach ($arrayDeErrores as $error) : ?> 
                    <li>
                        <?=$error?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form id='register' action='confirmacion.php' method='POST'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                
                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='nombre' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='edad' >Edad:</label><br/>
                    <input type='text' name='edad' id='edad' value='' maxlength="2" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error'></div>
                 <?php if(isset($_GET["versionCorta"]) == false) :?> 
                <div class='container' style='height:80px;'>
                    <label for='password' >Confirmar contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='cpassword' id='cpassword' maxlength="50" />
                    <div id='register_password_errorloc' class='error'></div>
                </div>
            <?php endif; ?>
                <div class="container">
                <label><input type="checkbox" name="terminos" id="cbox1" value="first_checkbox"> Acepto bases y condiciones </label><br>
                </div>
                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
