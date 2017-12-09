<?php
include("funciones.php");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bienvenido admin!</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="imagenes">
<link rel="stylesheet" type="text/css" href="estiloindex.css">

</head>

<body>
  <!--Barra navegacion del administrador-->
<?php barraAdministrador(); ?>

   <br>

<?php botonesRedes(); ?>

<br><br><br><br><br>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>

    <div class="gallery">
      <a href="Carrito" style="text-decoration: none;"><img src="imagenes/neko.jpg" style="border-style:solid;border-width: 5px;color:#9F0000; border-radius: 400px;" onmouseover="this.width=300;this.height=300;" onmouseout="this.width=250;this.height=250;" width="250" height="250" alt="" /> <div class="desc">Productos</div></div></a>
<div class="gallery">
      <a href="http://localhost/phpmyadmin/index.php?db=ukiyoshop&token=7daa6354c1479ff447d0e0b675febfd9" style="text-decoration: none;"><img src="imagenes/amaterasu.jpg" style="border-style:solid;border-width: 5px;color:#9F0000; border-radius: 400px;" onmouseover="this.width=300;this.height=300;" onmouseout="this.width=250;this.height=250;" width="250" height="250" alt="" /> <div class="desc">Base de datos</div></div></a>

      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php footerPaginas(); ?>

</html>
