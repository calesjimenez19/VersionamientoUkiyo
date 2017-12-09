<DOCTYPE HTML!>

<HTML>


<HEAD>
<CENTER> USUARIOS

</HEAD>

<BODY>
<TABLE border="2px">
<tr>

<td colspan="4"> <center>DATOS</center></td>
<td colspan="5"><center><a href="FORMULARIO BD.php"> NUEVO </a></center></td>
</tr>

<tr>
<td>ID</td>
<td>NOMBRE</td>
<td>APELLIDO</td>
<td>CONTRASEÑA</td>
<td>DIRECCION</td>
<td>TELEFONO</td>
<td>CORREO</td>
</tr>

<?PHP 
include ("Conexion.php");
$query = "SELECT * FROM  cliente" ;
$resultado = $Conexion -> query($query);
while($row = $resultado -> fetch_assoc())

{
	?> 

 

<tr>
<td> <?php echo $row["id"]; ?> </td>
<td> <?php echo $row["nombre"]; ?> </td>
<td> <?php echo $row["apellido"]; ?> </td>
<td> <?php echo $row["contrasena"]; ?> </td>
<td> <?php echo $row["direccion"]; ?> </td>
<td> <?php echo $row["telefono"]; ?> </td>
<td> <?php echo $row["correo"]; ?> </td>
</tr>
 
<?PHP
}
?>


</TABLE>
</CENTER>
</BODY>




</HTML>