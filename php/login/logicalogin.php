<?php
include_once "../../procesos/conexion.php";
	$password=md5($_POST['password']);
	$username=$_POST['username'];


	$consulta=$pdo->prepare("SELECT * FROM usuarios WHERE username=:username AND password=:password");
	$consulta->bindParam(':username',$username);
	$consulta->bindParam(':password',$password);
	$consulta->execute();
	if($consulta->rowCount()>=1){
		session_start();
		$fila=$consulta->fetch();
		$_SESSION['rol']=$fila['roles_id'];
		$_SESSION['id']=$fila['id_usuarios'];
		$_SESSION['username']=$fila['username'];

		switch ($_SESSION['rol']) {
		case ($_SESSION['rol']==1); 
			echo '<script type="text/javascript">
		   alert("BIENVENIDO admin");
		   window.location.href="../crud/user1.php";
		   </script>';

			break;
		case ($_SESSION['rol']==2);
				echo '<script type="text/javascript">
			   alert("BIENVENIDO user");
			   window.location.href="../../USUARIO/index.php";
			   </script>';
			   break;
	}
        
		}
?>