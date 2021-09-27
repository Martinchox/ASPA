<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, nombre, pais, edad FROM usuarios";
$resultado= $conexion->prepare($consulta);
$resultado=$resultado->fetchALL(PDO::FETCH_ASSOC);
?>




<table>
<?php
foreach ($data as $dat) {
?>
<tr>
<td><?php echo $dat['id']?></td>
<td><?php echo $dat['nombre']?></td>
<td><?php echo $dat['pais']?></td>
<td><?php echo $dat['edad']?></td>
<td></td>
</tr>


<?php
}
?>
</table>