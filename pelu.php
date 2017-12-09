<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Peluches</title>
<link rel="stylesheet" href="estilopeluche.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="imagenes">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

</head>
<body>
<ul>
<a href="index.php"><img src="imagenes/amaterasu.jpg" style="width: 400px; height: 50px; margin-top: 10px;"></a>	
<li><a class="active" href=""><i class="material-icons">&#xe8cc; </i></a></li>
<li><a href=""><i class="material-icons">   &#xe0bf;  </i>Conocenos</a></li>
  
  <li><a href=""><i class="material-icons">     &#xe24e;  </i>ofertas</a></li>

  
	<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="material-icons">	home  </i>Inicio</a>
    <div class="dropdown-content">
      <a href="formulario.php">Ingresa!</a>
      <a href="Formulario registro.php">Registrate!</a>
      <a href="formularioadm.html">Solo Administrador!</a>
    </div>
  </li>
</ul>

<div>
    
     <div class="relative">
          <a class="button button2" style="font-size: 30px;" title="Facebook" href="https://www.facebook.com/profile.php?id=100015973921079">
<span  class="fa fa-facebook-square"></span>
          </a>
</div>


 <div class="relative1">
    <a class="button3 button4" style="font-size: 30px; " title="Twitter" href="https://twitter.com/ukiyo2017">
<span  class="fa fa-twitter-square"></span>
</a>
</div>


<div class="relative2">
    <a class="button5 button6" style="font-size: 30px;" title="Google" href="https://plus.google.com/">
<span  class="fa fa-google-plus-square"></span>
</a>
</div>


         <div class="relative3">
    <a class="button7 button8" style="font-size: 30px;" title="whatsapp" href="https://web.whatsapp.com/">
           <span  class="fa fa-whatsapp"></span>
         </a>
        </div>


     <div class="relative4">
    <a class="button9 button10" style="font-size: 30px;" title="Instagram" href="https://www.instagram.com/">
      <span  class="fa fa-instagram"></span>
     </a>
      </div>
</div>
<br><br><br><br><br><br><br><br>
  <center><h2><font color="#9F0000", face="Cooper Black">¡ PELUCHES ! </h2></center></font>
  <br><br><br><br>

  </body>
<div class="divear">
<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
 <img id="fir" src="imagenes/al.jpg" style="width:980px; height:400px"  >
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
  Peluche Alakazam 
     </div>
</div>

<div class="w3-display-container mySlides">
  <img id="sec" src="imagenes/gab.jpg" style="width:980px; height:400px">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
   LLeva A este tierno Peluche de Gabumon con el 50% de descuento
  </div>
</div>

<div class="w3-display-container mySlides">
  <img id="thir" src="imagenes/ven.jpg" style="width:980px; height:400px">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Mega Venasaur
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

<div class="galeria">
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/me.jpg">
      <img  src="imagenes/me.jpg" alt="Peluche de mew" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche mew  de pokemon
    	Medidas 16cm*5 
    	Valor 30.000  
    	Puntos 150 
    	Cantidad 16
    </div>
   
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/ci.jpg">
      <img src="imagenes/ci.jpg" alt="Peluche cindaquil" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche cindaquil de pokemon
    	Medidas 12cm*5cm 
    	Valor 25.000
    	Puntos 125
    	Cantidad 25
    </div>
     
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/al.jpg">
      <img src="imagenes/al.jpg" alt="Peluche alakazam" width="600" height="400">
    </a>
    <div class="desc">
        Peluche alakazam de pokemon
    	Medidas 10cm*5cm 
    	Valor 20.000
    	Puntos 100
    	Cantidad 20
    </div>
   
  </div>
</div>
	
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/um.jpg">
      <img src="imagenes/um.jpg" alt="Peluche de umbreon" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche umbrion de pokemon
    	Medidas 11cm*5cm 
    	Valor 22.000
    	Puntos 110
    	Cantidad 15
    </div>
     
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/ven.jpg">
      <img src="imagenes/ven.jpg" alt="Peluche de mega venusaur" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche Mega venasaur de pokemon
    	Medidas 8cm*7cm 
    	Valor 40.000
    	Puntos 140
    	Cantidad 22
    </div>
     
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/to.jpg">
      <img src="imagenes/to.jpg" alt="Peluche de togepi" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche togepi de pokemon
    	Medidas 8cm*5cm 
    	Valor 18.000
    	Puntos 90
    	Cantidad 15
    </div>
     
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/pi.jpg">
      <img src="imagenes/pi.jpg" alt="Peluche de pikachu dormido" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche pikachu dormido de pokemon
    	Medidas 8cm*5cm 
    	Valor 32.000
    	Puntos 160
    	Cantidad 14
    </div>
     
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/inuyasha.jpg">
      <img src="imagenes/inuyasha.jpg" alt="Peluche de inuyasha" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche inuyasha de inuyasha
    	Medidas 10cm*6cm 
    	Valor 50.000
    	Puntos 250
    	Cantidad 14
    </div>
     
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/yo.jpg">
      <img src="imagenes/yo.jpg" alt="Peluche de biyomon" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche biyomon de digimon
    	Medidas 10cm*7cm 
    	Valor 15.000
    	Puntos 75
    	Cantidad 16
    </div>
     
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/m.jpg">
      <img src="imagenes/m.jpg" alt="Peluche de gomamon" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche gomamon de digimon
    	Medidas 6cm*7cm 
    	Valor 15.000
    	Puntos 75
    	Cantidad 15
    </div>
     
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/ag.jpg">
      <img src="imagenes/ag.jpg" alt="Peluche de agumon" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche agumon de digimon
    	Medidas 8cm*5cm 
    	Valor 15.000
    	Puntos 75
    	Cantidad 14
    </div>
     
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/gab.jpg">
      <img src="imagenes/gab.jpg" alt="Peluche de gabumon " width="600" height="400">
    </a>
    <div class="desc">
    	Peluche gabumon de digimon
    	Medidas 10cm*6cm 
    	Valor 15.000
    	Puntos 75
    	Cantidad 14
    </div>
     
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/ro.jpg">
      <img src="imagenes/ro.jpg" alt="Peluche rocket raccoon" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche rocket raccoon guardianes de la galaxia
    	Medidas 10cm*6cm 
    	Valor 15.000
    	Puntos 75
    	Cantidad 14
    </div>
     
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/ch.jpg">
      <img src="imagenes/ch.jpg" alt="Peluche de chopper " width="600" height="400">
    </a>
    <div class="desc">
    	Peluche chopper de one piece
    	Medidas 12cm*6cm 
    	Valor 35.000
    	Puntos 175
    	Cantidad 20
    </div>
     <center><p><button class="w3-button w3-red">Agregar al Carrito</button></p></center>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/don.jpg">
      <img src="imagenes/don.jpg" alt="Peluche de donatello" width="600" height="400">
    </a>
    <div class="desc">
    	Peluche donatello de las tortugas ninjas
    	Medidas 12cm*6cm 
    	Valor 45.000
    	Puntos 225
    	Cantidad 10
    </div>
     
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/kir.jpg">
      <img src="imagenes/kir.jpg" alt="Peluche de kirby " width="600" height="400">
    </a>
    <div class="desc">
    	Peluche kirby de planeta robobot
    	Medidas 11cm*6cm 
    	Valor 35.000
    	Puntos 175
    	Cantidad 18
    </div>
     
  </div>
</div>
<div class="clearfix"></div>
	</div>
</body>

</html>