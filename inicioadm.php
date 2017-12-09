<?php
session_start();
include_once "conexion1.php";

function verificar_login($user,$password,&$result) {
    $sql = "SELECT * FROM administrador WHERE ID_adm = '$user' and Contrasena_adm = '$password'";
    $rec = mysql_query($sql);
    $count = 0;

    while($row = mysql_fetch_object($rec))
    {
        $count++;
        $result = $row;
    }

    if($count == 1)
    {
        return 1;
    }

    else
    {
        return 0;
    }
}

if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
        {
            $_SESSION['userid'] = $result->idusuario;
            header("location:admin.php");
        }
        else
        {
            echo '<div class="error">Usuario o contrasena incorrectos, por favor intente nuevamente!.</div>';
		} 
    }
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css">

body{
    font-size: 12px;
    background-image: url("nubes.jpg");
}
/**
 * se aplica el ancho, margen centrado
 * borde de un pixel con redondeado, y rellenado
 * a la izquierda y derecha
 */
#Contenedor{
    width: 400px;
    margin: 50px auto;
    background-image: url("nubes.jpg");
        border: 1px solid #ECE8E8;
    height: 450px;
    border-radius:8px;
    padding: 0px 9px 0px 9px;
}
 
/**
 * Aplicando al icono de usuario el color de fondo,
 * rellenado de 20px y un redondeado de 120px en forma
 * de un circulo
 */
.Icon span{
      background: #A8A6A6;
      padding: 20px;
      border-radius: 120px;
}
/**
 * Se aplica al contenedor madre un margen de tamaño 10px hacia la cabecera y pie,
 * color de fuente blanco,un tamaño de fuente 50px y texto centrado.
 */
.Icon{
     margin-top: 10px;
     margin-bottom:10px; 
     color: #FFF;
     font-size: 50px;
     text-align: center;
}
/**
 * Se aplica al contenedor donde muestra en el pie
 * la opción de olvidaste tu contraseña?
 */
.opcioncontra{
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}


h1  {

    font-family: "Cooper Black";
    font-size: 30px;
    color: white;
	}
.error{
	font-family:"Comic Sans MS", cursive;
	color:#F00;	
	font-size:30px;
	margin-left: 600px;
	}	 
</style>
</head>
<body>
        <center><h1>INICIAR SESION ADMINISTRADOR</h1></center>
         <div id="Contenedor">
         <div class="Icon">
                    <!--Icono de usuario-->
                   <span class="glyphicon glyphicon-user"></span>
                 </div>
<div class="ContentForm">
            <form action="" method="post">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon1"><i class="
glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" name="user" aria-describedby="sizing-addon1" required>
                </div>
                <br>
                <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" name="password" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
                </div>
                <br>

                <input class="btn btn-lg btn-primary btn-block btn-signin" name="login" type="submit" >
                <input class="btn btn-lg btn-primary btn-block btn-signin" type= "reset" width="50px" height="40px" value="Cancelar">

                <div class="opcioncontra"><a href="olvidocontra.php">Olvidaste tu contrasena?</a></div>
                <div class="opcioncontra"><a href="formularioreg.php">Registrarme</a></div>
            </form>
         </div> 
         </div>
</body>
<!--<form action="" method="post" class="login">
	<div><label>IngreseID</label><input name="user" type="text" ></div>
	<div><label>Contrasena</label><input name="password" type="password"></div>
	<div><input name="login" type="submit" value="login"></div>
</form>-->
<?php
}else {
	echo 'Su usuario ingreso correctamente.';
	echo '<a href="logout.php">Logout</a>';
	header("location:inicio.php");
}
?>