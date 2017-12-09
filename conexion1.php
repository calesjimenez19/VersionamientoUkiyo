<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php
// datos para la conexion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','TU_BASE_DE_DATOS');
define('DB_USER','TU_USUARIO');
define('DB_PASS','TU_CLAVE');
@$con = mysql_connect('localhost','root','');
mysql_select_db('ukiyoshop',$con);
?>


</body>
</html>