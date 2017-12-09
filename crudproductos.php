<!DOCTYPE html>
<meta charset="UTF-8">

<?php
$con = mysqli_connect("localhost","root","","ukiyoshop") or die ("error")
?>
<html>

<head>
<title>Crud producto</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="crudproductos.css">


  </head>



<body>
<form  method="POST" action="crudproductos.php">
<label>ID PRODUCTO</label>	
<input class="form-control" type="text" name="ID_pro" placeholder="Escriba el codigo del producto" required="required">

<label>Nombre</label>	
<input class="form-control" type="text" name="nombre" placeholder="Escriba el nombre del producto">

<label>Categoria</label>	
<input  class="form-control" type="text" name="categoria" placeholder="Escriba la categoria del producto">

<label>Color</label>	
<input class="form-control" type="text" name="color" placeholder="Escriba el color del producto">

<input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="insert" value="Registrar producto">
</form>

 <?php
if(isset($_POST['insert'])){
	$idproduc=$_POST['ID_pro'];
    $nombre=$_POST['nombre'];
    $categoria=$_POST['categoria'];
    //$color=$_POST['color'];

  $insertar = "INSERT INTO producto (ID_producto,Nombre_producto,Categoria,Color) VALUES ('$idproduc','$nombre','$categoria','$color')";
  $ejecutar = mysqli_query($con,$insertar);

  if($ejecutar){
   echo "<h3>Insertado correctamente</h3>";
  }
}
   ?>  

<br/>

<table width="500" border="2" style="background-color: #f9f9f9;">
<tr>
<th>ID_PRODUCTO</th>
<th>NOMBRE</th>
<th>CATEGORIA</th>
<th>EDITAR</th>
<th>BORRAR</th>
</tr>

<?php
$consulta = "SELECT * FROM producto";

$ejecutar = mysqli_query($con,$consulta);
$i=0;

while($fila= mysqli_fetch_array($ejecutar)){
	$idproduc= $fila['ID_producto'];
	$nombre= $fila['Nombre_producto'];
	$categoria= $fila['Categoria'];
	//$color= $fila['Color'];

	$i++;
?>

<tr align="center">
<td><?php echo $idproduc; ?></td>
<td><?php echo $nombre; ?></td>
<td><?php echo $categoria; ?></td>

<td><a href="crudproductos.php?editar=<?php echo $idproduc;?>">EDITAR</a></td>
<td><a href="crudproductos.php?borrar=<?php echo $idproduc;?>">BORRAR</a></td>
</tr>

<?php } ?>

</table>
<?php 
if(isset($_GET['editar'])){
	include("editar.php");

}

?> 

<?php

if(isset($_GET['borrar'])){
$borrar_id= $_GET['borrar'];

$borrar = "DELETE FROM producto WHERE ID_producto='$borrar_id'";
$ejecutar = mysqli_query($con,$borrar);

if($ejecutar){
echo"<script>alert('El producto ha sido borrado')</script>";
echo "<script>window.open('crudproductos.php','_self')</script>";


}

}




?>
<a href="admin.php">Regresar</a>








</body>
</html>