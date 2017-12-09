<?php
include("Conexion.php");
$documentoe=$_POST ["ID_cliente"];
$nombres=$_POST['nombre'];
$apellidose=$_POST['apellido'];
$contrasenae=$_POST['contrasena'];
$direccione=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correos=$_POST['correo'];


$query = "INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `contrasena`, `direccion`, `telefono`, `correo`) VALUES ('$documentoe','$nombres','$apellidose','$contrasenae','$direccione','$telefono','$correos')";

$resultado=$Conexion->query($query);

if($resultado)
{
	echo "INGRESO DATO";

	HEADER ("location:index.php");
}
else
{
	echo "INGRESO UN DATO INCORRECTO, RECUERDE QUE NO DEBE DEJAR ESPACIOS NI USAR DIGITOS EXTRAÑOS EN DOCUMENTO NI TELEFONO EJEMPLO: .,-";
}
?>