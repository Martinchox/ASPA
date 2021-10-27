<?php
include_once "../../procesos/conexion.php";
	
	// $rol=$_POST['rol'];
	// $imagen_u=$_POST['imagen_u'];
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$genero=$_POST['genero'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$nombre_acudiente=$_POST['nombre_acudiente'];
	$apellido_acudiente=$_POST['apellido_acudiente'];
	$telefono_acudiente=$_POST['telefono_acudiente'];
	$email_acudiente=$_POST['email_acudiente'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	

	$consulta=$pdo->prepare("INSERT INTO usuarios(nombre,apellidos,genero,email,telefono,direccion,nombre_acudiente,apellido_acudiente,telefono_acudiente,email_acudiente,username,password) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");

	// $consulta->bindParam(1,$rol);
	// $consulta->bindParam(2,$imagen_u);
	$consulta->bindParam(1,$nombre);
	$consulta->bindParam(2,$apellidos);
	$consulta->bindParam(3,$genero);
	$consulta->bindParam(4,$email);
	$consulta->bindParam(5,$telefono);
	$consulta->bindParam(6,$direccion);
	$consulta->bindParam(7,$nombre_acudiente);
	$consulta->bindParam(8,$apellido_acudiente);
	$consulta->bindParam(9,$telefono_acudiente);
	$consulta->bindParam(10,$email_acudiente);
	$consulta->bindParam(11,$username);
	$consulta->bindParam(12,$password);

	if($consulta->execute()){
		echo '<script type="text/javascript">
		alert("TUS DATOS HAN SIDO ALMACENADOS CORRECTAMENTE");
		window.location.href="registrar.php";
		</script>';
	}else{
		echo'<script type="text/javascript">
		alert("ERROR AL REGISTRAR LOS DATOS");
		window.location.href="registrar.php";
		</script>';
	}
	?>