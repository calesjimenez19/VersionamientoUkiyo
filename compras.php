<head>
	<meta charset="utf-8"/>
	<title>Amaterasu Store</title>
	
	<link rel="stylesheet" type= "text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

</head>
<?php
session_start();
include "../conexion.php";
		@$arreglo=$_SESSION['carrito'];

    		$numeroventa=0;

    		$re=mysql_query("select * from compras order by numeroventa DESC limit 1") or die(mysql_error());
    		while (	$f=mysql_fetch_array($re)) {
    					$numeroventa=$f['numeroventa'];
    		}
    		if($numeroventa==0){
    			$numeroventa=1;
    		}else{
    			$numeroventa=$numeroventa+1;
    		}
    		for($i=0; $i<count($arreglo);$i++){
    			mysql_query("insert into compras (numeroventa, imagen,nombre,precio,cantidad,subtotal) values(
    				".$numeroventa.",
    				'".$arreglo[$i]['Imagen']."',
    				'".$arreglo[$i]['Nombre']."',
    				'".$arreglo[$i]['Precio']."',
    				'".$arreglo[$i]['Cantidad']."',
    				'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
    				)")or die(mysql_error());
    		}

		$total=0;
		$tabla='<table border="1"><tr>
		<th>Nombre</th>
		<th>Cantidad</th>
		<th>Precio</th>
		<th>Subtotal</th></tr>';
		for($i=0;$i<count($arreglo);$i++){

			$tabla=$tabla.'<tr>
			<td>'.$arreglo[$i]['Nombre'].'</td>
			<td>'.$arreglo[$i]['Cantidad'].'</td>
			<td>'.$arreglo[$i]['Precio'].'</td>
			<td>'.$arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio'].'</td>
			</tr>';
			$total=$total+($arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio']);
		}?>
		<style type="text/css">
             body{
             	background-image: url("nubes.jpg");
             }
		</style>
<body>
<?php
  echo' <a color="blue" href="../">Sigue Comprando!</a>';

       $comentario='
        <div style="
            width: 400px;
    margin: 50px auto;
    
        border: 5px solid black;
        
    height: 450px;
    border-radius:8px;
    padding: 0px 9px 0px 9px;

	      
        ">
        <center>';
echo $comentario;

          echo'  <div background-color:blue><center><h1>Muchas gracias por tu compra</h1></center></div>
                
            <hr width="90%">

            <p><b>Hola! muchas gracias por comprar en nuestro sitio, a continuacion te mostramos los detalles de tu compra.</b></p>
            Cantidad de articulos: '.count($arreglo).'<br>';
            echo 'Total: '.$total.'<br>';

          echo 'Lista de Articulos: <br>'.$tabla.'<div>';
          ?>
<body>
<?php
unset($_SESSION['carrito']);
 ?>
