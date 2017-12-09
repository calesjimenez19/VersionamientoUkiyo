<?php
$Conexion = new mysqli("localhost","root","","ukiyoshop");

if ($Conexion)
{
	echo"conexion establecida";
}
else 
{
	echo"sin conexion";
}
?>
