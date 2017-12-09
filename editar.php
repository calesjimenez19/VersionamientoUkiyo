<?php
if(isset($_GET['editar'])){
$editar_id = $_GET['editar'];
 
   $consulta="SELECT * FROM producto WHERE id ='$editar_id'";
   $ejecutar=mysqli_query($con,$consulta);

@$fila=mysqli_fetch_array($ejecutar);

	$nombre= $fila['Nombre_producto'];
	$categoria= $fila['Categoria'];
	$color= $fila['Color'];

}

?>


<form method="POST" action="">
<label>ID PRODUCTO</label>
<input type="text" name="ID_pro" value="<?php echo $idproduc;?>"><br/>
<label>NOMBRE</label>
<input type="text" name="nombre" value="<?php echo $nombre;?>"><br/>
<label>CATEGORIA</label>
<input type="text" name="categoria" value="<?php echo $categoria;?>"><br/>
<label>COLOR</label>
<input type="text" name="color" value="<?php echo $color;?>"><br/>
<input type="submit" name="actualizar" value="ACTUALIZAR DATOS"><br/>
</form>

<?php 
if(isset($_POST['actualizar'])){

$actualizar_nombre = $_POST['nombre'];
$actualizar_catego = $_POST['categoria'];
$actualizar_color = $_POST['color'];

$actualizar = "UPDATE producto SET Nombre_producto='$actualizar_nombre', Categoria='$actualizar_catego', Color='$actualizar_color' WHERE ID_producto='$editar_id'";

$ejecutar=mysqli_query($con,$actualizar);

if($ejecutar){
echo"<script>alert('Datos actualizados')</script>";
echo "<script>window.open('crudproductos.php','_self')</script>";
}
}
?>