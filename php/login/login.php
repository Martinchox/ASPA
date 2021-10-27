<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Iniciar sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="login.css">    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
                  function mostrarPassword(){
                     var cambio = document.getElementById("txtPassword");
                     if(cambio.type == "password"){
                        cambio.type = "text";
                        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                     }else{
                        cambio.type = "password";
                        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                     }
                  }
      </script>
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
        <i id="user" class="fa fa-user-o"></i></div>
        <form class="login-form" method="POST" action="logicalogin.php">
          <input type="text" name="username" placeholder="Usuario" required=""/>
          <div class="col-md-6">
            <div class="input-group">
          <input ID="txtPassword" type="password" name="password" Class="form-control" placeholder="Contraseña" required="">
          <div class="input-group-append">
            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span id="eye" class="fa fa-eye-slash icon"></span> </button>
          </div>
        </div>
          </div>      
          <div>
          <input style=" outline: 0; margin-top:20px; background: #28a745; width: 100%; border: 0; padding: 15px; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; color: #FFFFFF; font-size: 14px; transition: all 0.3 ease; cursor: pointer;" type="submit" value="INGRESAR"></input>
          </div>
        </form>        
      <p class="message">¿No tienes una cuenta?<a href="../registrar/registrar.php"> Regístrate.</a></p>
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
 