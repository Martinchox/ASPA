<?php

$username=$_POST['usuario'];
$password=$_POST['password'];

$consulta=$pdo->prepare("SELECT * FROM usuarios WHERE username=:username AND password=:password");
$consulta->bindParam(':username',$username);
$consulta->bindParam(':password',$password);
$consulta->execute();

if($consulta->rowCount()>=1){
    session_start();
    $fila=$consulta->fetch();
    $_SESSION['username']=$fila['username'];
    $_SESSION['token']=(uniqid(mt_rand(),true));

header("Location: ../../index.html");
}else{
    echo "Error, los datos no son correctos";
}



?>