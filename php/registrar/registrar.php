<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Registrar</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/registrar.css" rel="stylesheet" />
</head>

<body class="body">
    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form action="" method="POST">
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>REGISTRAR<br>
                        	</h3>
                    	</div>

						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#about" data-toggle="tab">Alumno</a></li>
	                            <li><a href="#account" data-toggle="tab">Acudiente</a></li>
	                            <li><a href="#address" data-toggle="tab">Cuenta</a></li>
	                        </ul>

						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                                <h4 class="info-text"> Ingresa tus datos personales </h4>
                              <div class="row">
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" name="imagen_u" id="wizard-picture">
                                          </div>
                                          <h6 class="form-group">Imagen de perfil</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <input name="rol" type="text" class="form-control" placeholder="rol">
                                      </div>
                                      <div class="form-group">
                                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                                      </div>
                                      <div class="form-group">
                                        <input name="apellidos" type="text" class="form-control" placeholder="Apellido">                                    
                                      </div>
                                      <div class="form-group">
                                        <input name="genero" type="text" class="form-control" placeholder="Genero">                                        
                                      </div>                                     
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Correo Electrónico">
                                    </div>
                                    <div class="form-group">
                                        <input name="telefono" type="text" class="form-control" placeholder="Teléfono">
                                      </div>
                                    <div class="form-group">
                                        <input name="direccion" type="text" class="form-control" placeholder="Dirección">
                                      </div> 
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> Ingresa los datos de tu acudiente</h4>
                                <div class="row">
                                    
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                          <input name="nombre_acudiente" type="text" class="form-control" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                          <input name="apellido_acudiente" type="text" class="form-control" placeholder="Apellido">                                    
                                        </div>  
                                      <div class="form-group">
                                          <input name="telefono_acudiente" type="text" class="form-control" placeholder="Teléfono">
                                        </div>
                                        <div class="form-group">
                                        <input name="email_acudiente" type="email" class="form-control" placeholder="Correo Electrónico">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Crea tu cuenta</h4>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-2">
                                         <div class="form-group">
                                            <input type="text" name="username" class="form-control" placeholder="Usuario">
                                          </div>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-2">
                                         <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                          </div>
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-2">
                                         <div class="form-group">
                                            <input type="password" name="c_password" class="form-control" placeholder="Confirmar Contraseña">
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Siguiente' />
                                <button type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm'  value='Registar'>REGISTRAR</button>
                                <?php
		if(isset($_POST['rol'])&&isset($_POST['imagen_u'])&&isset($_POST['nombre'])&&isset($_POST['apellidos'])&&isset($_POST['genero'])&&isset($_POST['email'])&&isset($_POST['telefono'])&&isset($_POST['direccion'])&&isset($_POST['nombre_acudiente'])&&isset($_POST['apellido_acudiente'])&&isset($_POST['telefono_acudiente'])&&isset($_POST['email_acudiente'])&&isset($_POST['username'])&&isset($_POST['password'])){
			require_once "conexion.php";
			require_once "logica.php";
		}
	?> 
                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Anterior' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
               
                    </form>
                </div>
                <p class="message">¿Ya estas registrado?<a href="../login/login.php"> Ingresa.</a></p>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->
</div>

</body>

	<!--   Core JS Files   -->
	<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="js/jquery.validate.min.js"></script>

</html>
