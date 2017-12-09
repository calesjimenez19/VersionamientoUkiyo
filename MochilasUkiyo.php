<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mochilas</title>
<link rel="stylesheet" href="EstiloMochilasUkiyo.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="imagenes/favicon.png" />
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

</head>
<body>
<ul>
<a href="index.php"><img src="imagenes/amaterasu.jpg" style="width: 380px; height: 70px; margin-top: -5px;margin-bottom: -10px"></a>	
<li><a class="active" href="#home"><i class="material-icons">   &#xe8cc; </i></a></li>
  <li><a href="#news"><i class="material-icons">    &#xe0bf;  </i>Conocenos</a></li>
  
  <li style="float:right"><a class="active" href="#about"><i class="material-icons">  &#xe24e; </i>Ofertas</a></li>
  
  
  

  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="material-icons"> home  </i>Inicio</a>
    <div class="dropdown-content">
      <a href="inicio.php">Ingresa!</a>
      <a href="clases/formularioreg.php">Registrate!</a>
      <a href="admin.php">Administrador!</a>
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
</div><BR><BR>
<div class="divear">
<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
 <img id="fir" src="imagenes/aot.jpg" style="width:980px; height:400px"  >
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    Attack On Titan
  </div>
</div>

<div class="w3-display-container mySlides">
  <img id="sec" src="imagenes/one.jpg" style="width:980px; height:400px">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    One Piece
  </div>
</div>

<div class="w3-display-container mySlides">
  <img id="thir" src="imagenes/naru2.jpg" style="width:980px; height:400px">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
   Mochila Naruto Azul
  </div>
</div>

<div class="w3-display-container mySlides">
  <img id="thir" src="imagenes/trafal.jpg" style="width:980px; height:400px">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Trafalgar Law
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
    <a target="_blank" href="imagenes/aot.jpg" >
      <img  src="imagenes/aot.jpg" alt="Attack On Titan" width="200" height="400">
    </a>
    <div class="desc">
    Mochila Attack On Titan
    <br>
        Precio: 25.000$
        <br>
        Valor Ukipoins!:
    </div>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/one.jpg">
      <img src="imagenes/one.jpg" alt="One Piece" width="600" height="400">
    </a>
    <div class="desc">
    Mochila One Piece
    	<br>
    	Precio: 25.000$
      <br>
        Valor Ukipoins!: 
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/dead.jpg">
      <img src="imagenes/dead.jpg" alt="Deadpool" width="600" height="400">
    </a>
    <div class="desc">
    Mochila Deadpool
    <br>
    Precio: 24.000$
    <br>
    Valor Ukipoins!:
    </div>
    
  </div>
</div>
	
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/trafal.jpg">
      <img src="imagenes/trafal.jpg" alt="Trafalgar Law" width="600" height="400">
    </a>
    <div class="desc">
    Mochila Trafalgar Law
    	<br>
    	Precio: 25.000$
    	<br>
    	Valor Ukipoins!:
    </div>
   
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/naru.jpg">
      <img src="imagenes/naru.jpg" alt="Naruto" width="600" height="400">
    </a>
    <div class="desc">
    Mochila Naruto
    	<br>
    	Precio: 24.000$
    	<br>
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/sao.jpg">
      <img src="imagenes/sao.jpg" alt="Sword Art Online" width="600" height="400">
    </a>
    <div class="desc">
    Mochila Sword Art Online
    	<br>
    	Precio: 27.000$
    	<br>
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/hora.jpg">
      <img src="imagenes/hora.jpg" alt="Hora De Aventura" width="600" height="400">
    </a>
    <div class="desc">
    Mochila Hora De Aventura
    	<br>
    	Precio: 20.000$
    	<br>
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/piece.jpg">
      <img src="imagenes/piece.jpg" alt="Mochila Luffy" width="600" height="400">
    </a>
    <div class="desc">
    Mochila Luffy
    	<br>
    	Precio: 26.000$
    	<br>
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/code.jpg">
      <img src="imagenes/code.jpg" alt="Code Geass" width="600" height="400">
    </a>
    <div class="desc">
     Mochila Code Geass
    	<br>
    	Precio: 30.000$
    	<br>
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/stf.jpg">
      <img src="imagenes/stf.jpg" alt="Yu Gi Oh" width="600" height="400">
    </a>
    <div class="desc">
    Mochila Yu-Gi-Oh
    	<br>
    	Precio: 35.000$
    	<br>
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/yugi.jpg">
      <img src="imagenes/yugi.jpg" alt="Tokyo Ghoul" width="600" height="400">
    </a>
    <div class="desc">
    Mochila Tokyo Ghoul
    	<br>
    	Precio: 24.000$
    	<br>
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/poke.jpg">
      <img src="imagenes/poke.jpg" alt="Dragon Ball >" width="600" height="400">
    </a>
    <div class="desc">
    Mochila Dragon Ball Z
    	<br>
    	Precio: 28.000$
    	<br>
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/dra.jpg">
      <img src="imagenes/dra.jpg" alt="Pandora Hearts" width="600" height="400">
    </a>
    <div class="desc">
    Mochila Pandora Hearts
    	<br>
    	Precio: 35.000$
    	<br>
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/dora.jpg">
      <img src="imagenes/dora.jpg" alt="Doraemon" width="600" height="400">
    </a>
    <div class="desc">
    Mochila Doraemon
    	<br>
    	Precio: 35.000$
    	<br>
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/naru2.jpg">
      <img src="imagenes/naru2.jpg" alt="Naruto" width="600" height="400">
    </a>
    <div class="desc">
    Mochilla Naruto Azul
    	<br>
    	Precio: 26.000$
    	<br>
    	Valor Ukipoins!:
    	
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/ble.jpg">
      <img src="imagenes/ble.jpg" alt="bleach" width="600" height="400">
    </a>
    <div class="desc">
    Mochuila Bleach
    	<br>
    	Precio: 26.000$
    	<br>
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>
<div class="clearfix"></div>
	</div>
</body>
<footer id="pie">
</footer>
</html>