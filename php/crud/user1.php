<?php include('../../procesos/conexion.php');

session_start();
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>CRUD ADMIN</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1500);
    },3000);

});
</script>
</head>
<body>
<header>
  <button></button>
</header>

<!-- Begin page content -->

<div class="container">
<?php
    
if(isset($_POST['eliminar'])){

////////////// Actualizar la tabla /////////
$consulta = "DELETE FROM `usuarios` WHERE `id_usuarios`=:id";
$sql = $pdo-> prepare($consulta);
$sql -> bindParam(':id', $id, PDO::PARAM_INT);
$id=trim($_POST['id']);

$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo "<div class='content alert alert-primary' > 
Gracias: $count registro ha sido eliminado  </div>";
}
else{
    echo "<div class='content alert alert-danger'> No se pudo eliminar el registro  </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>

<?php
    
if(isset($_POST['insertar'])){
///////////// Informacion enviada por el formulario /////////////
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$genero=$_POST['genero'];
$email=$_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$nombre_acudiente = $_POST['nombre_acudiente'];
$apellido_acudiente = $_POST['apellido_acudiente'];
$telefono_acudiente = $_POST['telefono_acudiente'];
$telefono_acudiente = $_POST['email_acudiente'];

///////// Fin informacion enviada por el formulario /// 

////////////// Insertar a la tabla la informacion generada /////////
$sql="insert into usuarios(nombre,apellidos,genero,email,telefono,direccion,nombre_acudiente,apellido_acudiente,telefono_acudiente,email_acudiente) values(:nombres,:apellidos,:genero,:email,:telefono,:direccion,:nombre_acudiente,:apellido_acudiente,:telefono_acudiente,:email_acudiente)";
    
$sql = $pdo->prepare($sql);
$sql->bindParam(':nombres',$nombres,PDO::PARAM_STR,25);
$sql->bindParam(':apellidos',$apellidos,PDO::PARAM_STR,25);
$sql->bindParam(':genero',$genero,PDO::PARAM_STR,25);
$sql->bindParam(':email',$email,PDO::PARAM_STR,25);
$sql->bindParam(':telefono',$telefono,PDO::PARAM_STR,25);
$sql->bindParam(':direccion',$direccion,PDO::PARAM_STR,25);
$sql->bindParam(':nombre_acudiente',$nombre_acudiente,PDO::PARAM_STR,25);
$sql->bindParam(':apellido_acudiente',$apellido_acudiente,PDO::PARAM_STR,25);
$sql->bindParam(":telefono_acudiente",$telefono_acudiente,PDO::PARAM_INT,14);
$sql->bindParam(':email_acudiente',$email_acudiente,PDO::PARAM_STR,25);

    
$sql->execute();

$lastInsertId = $pdo->lastInsertId();
if($lastInsertId>0){

echo "<div class='content alert alert-primary' > Gracias .. Tu Nombre es : $nombres  </div>";
}
else{
    echo "<div class='content alert alert-danger'> No se pueden agregar datos, comuníquese con el administrador  </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>

<?php
    
if(isset($_POST['actualizar'])){
///////////// Informacion enviada por el formulario /////////////
$id=intval($_POST['id']);
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$genero=$_POST['genero'];
$email=$_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$nombre_acudiente = $_POST['nombre_acudiente'];
$apellido_acudiente = $_POST['apellido_acudiente'];
$telefono_acudiente = $_POST['telefono_acudiente'];
$email_acudiente = $_POST['email_acudiente'];

///////// Fin informacion enviada por el formulario /// 

////////////// Actualizar la tabla /////////
$consulta = "UPDATE usuarios
SET `nombre`= :nombres, `apellidos` = :apellidos, `genero` = :genero, `email` = :email, `telefono` = :telefono, `direccion` = :direccion, `nombre_acudiente` = :nombre_acudiente, `apellido_acudiente` = :apellido_acudiente, `telefono_acudiente` = :telefono_acudiente, `email_acudiente` = :email_acudiente
WHERE `id_usuarios` = :id";
$sql = $pdo->prepare($consulta);
$sql->bindParam(':nombres',$nombres,PDO::PARAM_STR,25);
$sql->bindParam(':apellidos',$apellidos,PDO::PARAM_STR,25);
$sql->bindParam(':genero',$genero,PDO::PARAM_STR,25);
$sql->bindParam(':email',$email,PDO::PARAM_STR,25);
$sql->bindParam(':telefono',$telefono,PDO::PARAM_STR,25);
$sql->bindParam(':direccion',$direccion,PDO::PARAM_STR,25);
$sql->bindParam(':nombre_acudiente',$nombre_acudiente,PDO::PARAM_STR,25);
$sql->bindParam(':apellido_acudiente',$apellido_acudiente,PDO::PARAM_STR,25);
$sql->bindParam(':telefono_acudiente',$telefono_acudiente,PDO::PARAM_STR,25);
$sql->bindParam(':email_acudiente',$email_acudiente,PDO::PARAM_STR,25);
$sql->bindParam(':id',$id,PDO::PARAM_INT);

$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo "<div class='content alert alert-primary' > 

  
Gracias: $count registro ha sido actualizado  </div>";
}
else{
    echo "<div class='content alert alert-danger'> No se pudo actualizar el registro  </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>
  <h3 class="mt-5">ADMINISTRADOR DE USUARIOS ASPA</h3>
  <hr>
  <div class="row">
  
  <!-- Insertar Registros-->
  <?php 
if (isset($_POST['formInsertar'])){?>
    <div class="col-12 col-md-12"> 
<form action="" method="POST">
  <div class="form-row">
    
  <div class="form-group col-md-6">
      <label for="nombres">Nombres</label>
      <input  name="nombre" type="text" class="form-control" placeholder="Nombres">
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Apellidos</label>
      <input  name="apellidos" type="text" class="form-control" id="edad" placeholder="Apellidos">
    </div>
  </div>
<div class="form-row">  
    <div class="form-group col-md-6">
      <label for="profesion">Genero</label>
      <input  name="genero" type="text" class="form-control" id="profesion" placeholder="genero">
    </div>

  <div class="form-group col-md-6">
    <label for="Estado">Email</label>
    <input name="email" type="text" class="form-control" id="profesion" placeholder="email">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Telefono</label>
    <input  name="telefono" type="text" class="form-control" id="profesion" placeholder="telefono">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Dirección</label>
    <input  name="direccion" type="text" class="form-control" id="profesion" placeholder="direccion">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Nombre acudiente</label>
    <input  name="nombre_acudiente" type="text" class="form-control" id="profesion" placeholder="nombre acudiente">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Apellido acudiente</label>
    <input  name="apellido_acudiente" type="text" class="form-control" id="profesion" placeholder="apellido acudiente">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Telefono acudiente</label>
    <input  name="telefono_acudiente" type="text" class="form-control" id="profesion" placeholder="telefono acudiente">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Email acudiente</label>
    <input name="email_acudiente" type="text" class="form-control" id="profesion" placeholder="email acudiente">
  </div>
</div>
<div class="form-group">
  <button name="insertar" type="submit" class="btn btn-primary  btn-block">Guardar</button>
</div>
</form>
    </div> 
<?php }  ?>
<!-- Fin Insertar Registros-->


<?php 
if (isset($_POST['editar'])){
$id = $_POST['id'];
$sql= "SELECT * FROM usuarios WHERE id_usuarios = :id"; 
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT); 
$stmt->execute();
$obj = $stmt->fetchObject();
 
?>

    <div class="col-12 col-md-12"> 

<form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input value="<?php echo $obj->id_usuarios;?>" name="id" type="hidden">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Nombres</label>
      <input value="<?php echo $obj->nombre;?>" name="nombre" type="text" class="form-control" placeholder="Nombres">
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Apellidos</label>
      <input value="<?php echo $obj->apellidos;?>" name="apellidos" type="text" class="form-control" id="edad" placeholder="Apellidos">
    </div>
  </div>
<div class="form-row">  
    <div class="form-group col-md-6">
      <label for="profesion">Genero</label>
      <input value="<?php echo $obj->genero;?>" name="genero" type="text" class="form-control" id="profesion" placeholder="genero">
    </div>

  <div class="form-group col-md-6">
    <label for="Estado">Email</label>
    <input value="<?php echo $obj->email;?>" name="email" type="text" class="form-control" id="profesion" placeholder="email">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Telefono</label>
    <input value="<?php echo $obj->telefono;?>" name="telefono" type="text" class="form-control" id="profesion" placeholder="telefono">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Dirección</label>
    <input value="<?php echo $obj->direccion;?>" name="direccion" type="text" class="form-control" id="profesion" placeholder="email">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Nombre acudiente</label>
    <input value="<?php echo $obj->nombre_acudiente;?>" name="nombre_acudiente" type="text" class="form-control" id="profesion" placeholder="nombre acudiente">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Apellido acudiente</label>
    <input value="<?php echo $obj->apellido_acudiente;?>" name="apellido_acudiente" type="text" class="form-control" id="profesion" placeholder="apellido acudiente">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Telefono acudiente</label>
    <input value="<?php echo $obj->telefono_acudiente;?>" name="telefono_acudiente" type="text" class="form-control" id="profesion" placeholder="telefono acudiente">
  </div>
  <div class="form-group col-md-6">
    <label for="Estado">Email acudiente</label>
    <input value="<?php echo $obj->email_acudiente;?>" name="email_acudiente" type="text" class="form-control" id="profesion" placeholder="email acudiente">
  </div>
</div>
<div class="form-group">
  <button name="actualizar" type="submit" class="btn btn-primary  btn-block">Actualizar Registro</button>
</div>
</form>
    </div>  
<?php }?>
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->


<div style="float:right; margin-bottom:5px;">

<form action="" method="post">
  <button class="btn btn-primary" name="formInsertar">Nuevo registro</button>  <a href="index.php"><button type="button" class="btn btn-primary">Cancelar</button></a></form></div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="thead-dark">
    <th width="18%">Nombres</th>
    <th width="22%">Apellidos</th>
    <th width="22%">GENERO</th>
    <th width="14%">EMAIL</th>
    <th width="13%">TELEFONO</th>
    <th width="13%">DIRECCION</th>
    <th width="13%">NOMBRE ACUDIENTE</th>
    <th width="13%">APELLIDO ACUDIENTE</th>
    <th width="13%">TELEFONO ACUDIENTE</th>
    <th width="13%">EMAIL ACUDIENTE</th>
    <th width="13%" colspan="2"></th>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM usuarios"; 
$query = $pdo -> prepare($sql); 
$query -> execute(); 
$results = $query -> fetchAll(PDO::FETCH_OBJ); 

if($query -> rowCount() > 0)   { 
foreach($results as $result) { 
echo "<tr>
<td>".$result -> nombre."</td>
<td>".$result -> apellidos."</td>
<td>".$result -> genero."</td>
<td>".$result -> email."</td>
<td>".$result -> telefono."</td>
<td>".$result -> direccion."</td>
<td>".$result -> nombre_acudiente."</td>
<td>".$result -> apellido_acudiente."</td>
<td>".$result -> telefono_acudiente."</td>
<td>".$result -> email_acudiente."</td>

<td>
<form method='POST' action='".$_SERVER['PHP_SELF']."'>
<input type='hidden' name='id' value='".$result -> id_usuarios."'>
<button name='editar'>Editar</button>
</form>
</td>

<td>
<form  onsubmit=\"return confirm('Realmente desea eliminar el registro?');\" method='POST' action='".$_SERVER['PHP_SELF']."'>
<input type='hidden' name='id' value='".$result -> id_usuarios."'>
<button name='eliminar'>Eliminar</button>
</form>
</td>
</tr>";

   }
 }
?>
</tbody>
</table>
</div>
   </div>  
  </div>
 

      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->

<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="dist/js/bootstrap.min.js"></script> 
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>