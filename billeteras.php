<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Billeteras</title>
<link rel="stylesheet" href="estilodebilleteras.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="favicon.png" />
<link rel="stylesheet" type="text/css" href="imagenes">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

</head>
<body>
<ul>
<a href="index.php"><img src="imagenes/amaterasu.jpg" height="58" style="width: 400px; height: 50px; margin-top: 10px;"></a>	
<li><a class="active" href=""><i class="material-icons">&#xe8cc; </i></a></li>
  <li><a href=""><i class="material-icons">   &#xe0bf;  </i>Conocenos</a></li>
  <li><a href=""><i class="material-icons">     &#xe24e;  </i>ofertas</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="material-icons"> home  </i>Inicio</a>
    <div class="dropdown-content">
      <a href="formulario.php">Ingresa!</a>
      <a href="Formulario registro.php">Registrate!</a>
      <a href="formularioadm.html">Solo Administrador!</a>
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
  <center><h2><font color="#9F0000", face="Cooper Black">¡ BILLETERAS ! </h2></center></font>
  <br><br><br><br>
<div class="divear">
<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
 <img id="fir" src="imagenes/gokuazul.jpg" style="width:980px; height:400px"  >
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    TOP #1
  </div>
</div>

<div class="w3-display-container mySlides">
  <img id="sec" src="imagenes/walk.jpg" style="width:980px; height:400px">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    The walking Dead!!
  </div>
</div>

<div class="w3-display-container mySlides">
  <img id="thir" src="imagenes/jack2.jpg" style="width:980px; height:400px">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Llevate a Jack en tu bolsillo!
  </div>
</div>

<div class="w3-display-container mySlides">
  <img id="thir" src="imagenes/nose.jpg" style="width:980px; height:400px">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Anime Inesperado
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
    <a target="_blank" href="Walk.jpg" >
      <img  src="imagenes/walk.jpg" alt="walking Dead" width="200" height="400">
    </a>
    <div class="desc">
    Billetera The Walking Dead
    	Tamaño: 15x10 cm
        Precio: 30.000$
        Cantidad: 10 Unit
        Valor Ukipoins!:
    </div>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="gokuf4.jpg">
      <img src="imagenes/gokuf4.jpg" alt="Goku ss4" width="600" height="400">
    </a>
    <div class="desc">
    Billetera Goku SS4
    	Tamaño: 16x12 cm
    	Precio: 24.000$
        Cantidad: 8 Unit
        Valor Ukipoins!: 
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="hora.jpg">
      <img src="imagenes/hora.jpg" alt="Hora de aventuras" width="600" height="400">
    </a>
    <div class="desc">
    Billetera Jake
    Tamaño: 15x10 cm
    Precio: 24.000$
    Cantidad: 5 Unit
    Valor Ukipoins!:
    </div>
    
  </div>
</div>
	
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="hora2.jpg">
      <img src="imagenes/hora2.jpg" alt="Personaje Hra Avent" width="600" height="400">
    </a>
    <div class="desc">
    Billetera Phin Hora de aventuras
    	Tamaño: 22x8 cm
    	Precio: 35.000$
    	Cantidad: 6 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="batman.jpg">
      <img src="imagenes/batman.jpg" alt="Batman" width="600" height="400">
    </a>
    <div class="desc">
    Billetera Batman 
    	Tamaño: 15x10 cm
    	Precio: 24.000$
    	Cantidad: 5 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="luf.jpg">
      <img src="imagenes/luf.jpg" alt="Billetera Luffy" width="600" height="400">
    </a>
    <div class="desc">
    Billetera Luffy Gear First
    	Tamaño: 12x10 cm
    	Precio: 26.000$
    	Cantidad: 7 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="mine.jpg">
      <img src="imagenes/mine.jpg" alt="Minecraft" width="600" height="400">
    </a>
    <div class="desc">
    Billetera Steve Minecraft
    	Tamaño: 12x10 cm
    	Precio: 20.000$
    	Cantidad: 6 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="onepun.jpg">
      <img src="imagenes/onepun.jpg" alt="One punchman" width="600" height="400">
    </a>
    <div class="desc">
    Billetera Onepunchman
    	Tamaño: 15x10 cm
    	Precio: 26.000$
    	Cantidad: 5 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="nose.jpg">
      <img src="imagenes/nose.jpg" alt="Anime raro" width="600" height="400">
    </a>
    <div class="desc">
     Billetera Anime raro
    	Tamaño: 12x10 cm
    	Precio: 20.000$
    	Cantidad: 10 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="naru.jpg">
      <img src="imagenes/naru.jpg" alt="Naruto" width="600" height="400">
    </a>
    <div class="desc">
    Billetera Naruto 
    	Tamaño: 11x10 cm
    	Precio: 30.000$
    	Cantidad: 8 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pika.jpg">
      <img src="imagenes/pika.jpg" alt="Pikachu" width="600" height="400">
    </a>
    <div class="desc">
    Billetera Pikachu
    	Tamaño: 11x10 cm
    	Precio: 24.000$
    	Cantidad: 6 Unit
    	Valor Ukipoins!:
    </div>
   
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="gokuazul.jpg">
      <img src="imagenes/gokuazul.jpg" alt="Goku Dragon ball super " width="600" height="400">
    </a>
    <div class="desc">
    Billetera Goku SSdios Azul
    	Tamaño: 12x10 cm
    	Precio: 24.000$
    	Cantidad: 12 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pika2.jpg">
      <img src="imagenes/pika2.jpg" alt="Pikachu kawai" width="600" height="400">
    </a>
    <div class="desc">
    Billetera Pikachu tipo cartera
    	Tamaño: 22x8 cm
    	Precio: 35.000$
    	Cantidad: 10 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="jack2.jpg">
      <img src="imagenes/jack2.jpg" alt="Jack peli christmas " width="600" height="400">
    </a>
    <div class="desc">
    Billetera Jack tipo cartera
    	Tamaño: 22x8 cm
    	Precio: 35.000$
    	Cantidad: 8 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="zor.jpg">
      <img src="imagenes/zor.jpg" alt="Ronoa Zoro" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 12x10 cm
    	Precio: 26.000$
    	Cantidad: 4 Unit
    	Valor Ukipoins!:
    	
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="chikis.jpg">
      <img src="imagenes/chikis.jpg" alt="Goku Nube " width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 12x10 cm
    	Precio: 26.000$
    	Cantidad: 8 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>
<div class="clearfix"></div>
	</div>
</body>

</html>