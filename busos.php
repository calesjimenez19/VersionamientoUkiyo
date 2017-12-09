<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Busos</title>
<link rel="stylesheet" href="estilosbusos.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <a href="inicio.php">Ingresa!</a>
      <a href="Formulario registro.php">Registrate!</a>
      <a href="admin.php">Solo Administrador!</a>
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
  <center><h2><font color="#9F0000", face="Cooper Black">¡ BUSOS ! </h2></center></font>
  <br><br><br><br>

<div class="divear">
<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
 <img id="fir" src="imagenes/jjj.jpg" style="width:980px; height:400px"  >
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    Buso Tokyo Ghoul
  </div>
</div>

<div class="w3-display-container mySlides">
  <img id="sec" src="imagenes/xD.jpg" style="width:980px; height:400px">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Buso Fairs Tails
  </div>
</div>

<div class="w3-display-container mySlides">
  <img id="thir" src="imagenes/lll.jpg" style="width:980px; height:400px">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Buso Naruto 
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
    <a target="_blank" href="imagenes/bbb.png">
      <img  src="imagenes/bbb.png" alt="Buso One Punch Man" width="200" height="400">
    </a>
    <div class="desc">
    	Tamaño: 15x10 cm
        Precio:
        Cantidad: 10 Unit
        Valor Ukipoins!:
    </div>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/ccc.jpg">
      <img src="imagenes/ccc.jpg" alt="Buso Bleach" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 16x12 cm
    	Precio:
        Cantidad: 8 Unit
        Valor Ukipoins!: 
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/eee.jpg">
      <img src="imagenes/eee.jpg" alt="Buso Batman" width="600" height="400">
    </a>
    <div class="desc">
    Tamaño: 15x10 cm
    Precio: 
    Cantidad: 5 Unit
    Valor Ukipoins!:
    </div>
    
  </div>
</div>
	
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/fff.jpg">
      <img src="imagenes/fff.jpg" alt="Buso Goku" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 22x8 cm
    	Precio:
    	Cantidad: 6 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/ggg.jpg">
      <img src="imagenes/ggg.jpg" alt="Buso Tokyo Ghoul" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 15x10 cm
    	Precio:
    	Cantidad: 5 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/hhh.jpg">
      <img src="imagenes/hhh.jpg" alt="One Piece" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 12x10 cm
    	Precio:
    	Cantidad: 7 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/iii.jpg">
      <img src="imagenes/iii.jpg" alt="Buso Deadpool" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 12x10 cm
    	Precio:
    	Cantidad: 6 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/jjj.jpg">
      <img src="imagenes/jjj.jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 15x10 cm
    	Precio:
    	Cantidad: 5 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/kkk.jpg">
      <img src="imagenes/kkk.jpg" alt="Anime raro" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 12x10 cm
    	Precio:
    	Cantidad: 10 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/lll.jpg">
      <img src="imagenes/lll.jpg" alt="Naruto" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 11x10 cm
    	Precio:
    	Cantidad: 8 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/mmm.jpg">
      <img src="imagenes/mmm.jpg" alt="Pikachu" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 11x10 cm
    	Precio:
    	Cantidad: 6 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/nnn.jpg">
      <img src="imagenes/nnn.jpg" alt="Goku Dragon ball super " width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 12x10 cm
    	Precio:
    	Cantidad: 12 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/ooo.jpg">
      <img src="imagenes/ooo.jpg" alt="Pikachu kawai" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 22x8 cm
    	Precio:
    	Cantidad: 10 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/uuu.jpg">
      <img src="imagenes/uuu.jpg" alt="Jack peli christmas " width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 22x8 cm
    	Precio:
    	Cantidad: 8 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/xD.jpg">
      <img src="imagenes/xD.jpg" alt="Ronoa Zoro" width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 12x10 cm
    	Precio:
    	Cantidad: 4 Unit
    	Valor Ukipoins!:
    	
    </div>
   
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="imagenes/xxx.jpg">
      <img src="imagenes/xxx.jpg" alt="Goku Nube " width="600" height="400">
    </a>
    <div class="desc">
    	Tamaño: 12x10 cm
    	Precio:
    	Cantidad: 8 Unit
    	Valor Ukipoins!:
    </div>
    
  </div>
</div>
<div class="clearfix"></div>
	</div>
</body>
<footer>
	UkiyoShop! Todos los derechos reservados.
	Contacto: 7807289- Calle 147 # 35-44 - Bogotá colombia.
</footer>
</html>