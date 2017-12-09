<?php
include("funciones.php");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Amaterasu Store</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet"  href="estiloindex.css">
<link rel="stylesheet" type="text/css" href="imagenes">
<link rel="icon" type="image/png" href="imagenes/favicon.png" />
</head>

<body>
	<?php barraNavegacionDesp(); ?>
<br>
<?php botonesRedes(); ?>

<br><br><br><br><br>

 <center><h2><font color="#9F0000", face="Cooper Black">¡ BIENVENIDOS A AMATERASU STORE !</h2></center></font>


   <div class="divear">
<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
 <img id="fir" src="imagenes/anime45.png" style="width:980px; height:400px"  >
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    ANIME
  </div>
</div>

<div class="w3-display-container mySlides">
  <img id="sec" src="imagenes/manga1.jpg" style="width:980px; height:400px">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    MANGA
  </div>
</div>

<div class="w3-display-container mySlides">
  <img id="thir" src="imagenes/otaku2.jpg" style="width:980px; height:400px">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    AMBIENTE OTAKU
  </div>
</div>

<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
</div>
  </div>

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

<center><h4><font color="#9F0000", face="Cooper Black">PRODUCTOS</h4></center></font>

    <div class="gallery">
      <a href="articulos.php" style="text-decoration: none;"><img src="imagenes/articulos4.jpg" style="border-style:solid;border-width: 5px;color:#9F0000; border-radius: 400px;" onmouseover="this.width=300;this.height=300;" onmouseout="this.width=250;this.height=250;" width="250" height="250" alt="" /> <div class="desc">Articulos!</div></div></a>

    <div class="gallery">
   <a href="busos.php" style="text-decoration: none;"><img src="imagenes/pikachu.jpg" style="border-style:solid;border-width: 5px;color:#9F0000;border-radius : 400px"onmouseover="this.width=300;this.height=300;" onmouseout="this.width=250;this.height=250;" width="250" height="250" alt="" /><div class="desc">Busos</div></div></a>

   <div class="gallery">
   <a href="MochilasUkiyo.php" style="text-decoration: none;"><img src="imagenes/mochila 3.jpg" style="border-style:solid;border-width: 5px;color:#9F0000;border-radius: 400px"onmouseover="this.width=300;this.height=300;" onmouseout="this.width=250;this.height=250;" width="250" height="250" alt="" /><div class="desc">Mochilas</div></div></a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="gallery1">
    <a href="pelu.php" style="text-decoration: none;"><img src="imagenes/peluches2.jpg" style="border-style:solid;border-width: 5px;color:#9F0000;border-radius: 400px"onmouseover="this.width=300;this.height=300;" onmouseout="this.width=250;this.height=250;" width="250" height="250" alt="" /><div class="desc">Peluches</div></div></a>


<div class="gallery2">
   <a href="billeteras.php" style="text-decoration: none;"><img src="imagenes/billeteras1.jpg" style="border-style:solid;border-width: 5px;color:#9F0000;border-radius: 400px"onmouseover="this.width=300;this.height=300;" onmouseout="this.width=250;this.height=250;" width="250" height="250" alt="" /><div class="desc">Billeteras</div></div></a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

      <?php footerPaginas(); ?>

</html>
