<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Iniciar sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="login.css">    
    <link rel="stylesheet" href="../css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body class="body">

  <div>    
      <div class="form">
        <div class="container">
          <div class="info">
            <h1 class="titulo">INICIAR SESIÓN</h1>
          </div>
        </div>
        <div class="thumbnail">
        <i class="fa fa-user-o"></i></div>
        <form class="login-form" method="POST">
          <input type="text" name="usuario" placeholder="Usuario" required=""/>
          <div class="col-md-6">
            <div class="input-group">
          <input id="txtPassword" type="Password" name="password" Class="form-control" placeholder="Contraseña" required="">
          <div class="input-group-append">
                <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()" style="background-color: transparent;">
                <i class="fa fa-eye-slash"></i> </button>
              </div>
        </div>
          </div>      
          <button>Ingresar</button>
        </form>        
      <p class="message">¿No tienes una cuenta?<a href="../registrar/registrar.html"> Regístrate.</a></p>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script src="login.js"></script>
      
    </body>
  </html>
 