<!DOCTYPE html>
		<html>
		<head>
		    <title>formularioregistro</title>
		     
			<!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Temas-->

		    <style>
		    body{background-image: url("nubes.jpg");}

/*
Al cuerpo de la
pagina se aplica el tamaño de fuente
 */
body{
	font-size: 12px;
}
/**
 * se aplica el ancho, margen centrado
 * borde de un pixel con redondeado, y rellenado
 * a la izquierda y derecha
 */
#Contenedor{
	width: 500px;
	margin: 50px auto;
	background-image: url("nubes.jpg"); 
        border: 1px solid #ECE8E8;
	height: 780px;
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

h1 {

	font-size: 20px;
}

h2 {

	font-family: "Cooper Black";
	font-size: 30px;
	color: white;
}
		    </style>
		</head>
		<body>
		<center><h2>FORMULARIO DE REGISTRO</h2></center>
		 <div id="Contenedor">
		 <div class="Icon">
                    <!--Icono de usuario-->
                   <span class="fa fa-users"></span>
                 </div>
<div class="ContentForm">

                 

		 		<form  name="formulario " method="post"  action= "pagina_insertar_usuarios.php">



		 		
<label for="IDcliente"><b>DOCUMENTO</b></label>
<input name="ID" type="text" class="form-control"  size="50" maxlength= "100" placeholder= "Digite su documento" aria-describedby="sizing-addon1" required>
<br>

<label for="nombre"><b>NOMBRE</b></label>
<input name="nombre" type="text" class="form-control"  size="50" maxlength= "100" placeholder= "Digite sus Nombres" aria-describedby="sizing-addon1" required>
<br>


<label for="apellido"><b>APELLIDO</b></label>
<input name="apellido" type="text" class="form-control"  size="50" maxlength= "100" placeholder="Digite sus Apellidos" aria-describedby="sizing-addon1" required>
<br>


<label for=""><b>CONTRASENA</b></label>
<input name= "contra" type="password" class="form-control"  size="50" maxlength= "100" placeholder="Digite su Contrasena" aria-describedby="sizing-addon1" required>
<br>


<label for="direccion"><b>DIRECCION</b></label>
<input name= "direccion" type= "text" class="form-control"  size="50" maxlength= "100" placeholder="Digite su Direccion">
<br>


<label for="Telefono"><b>TELEFONO</b></label>
<input name="telefono" type="text" class="form-control"  placeholder="Digite su telefono">
<br>


<label for="Correo"><b>CORREO ELECTRONICO</b></label>
<input name="correo" type="email" class="form-control"  size="50" maxlength="100" placeholder="Digite Su Correo Electronico" aria-describedby="sizing-addon1" required>
<br>
	

<input class="btn btn-lg btn-primary btn-block btn-signin" type= "submit" width="50px" height="40px" value="Registrar">
<input class="btn btn-lg btn-primary btn-block btn-signin" type= "reset" width="50px" height="40px" value="Cancelar">
<div class="opcioncontra"><a href="index.php">volver a inicio</a></div>


		 	</form>
		 </div>	
		 
</body>

</html>