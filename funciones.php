<!DOCTYPE html>
<html lan="es">
<head>
 	<title>Amaterasu Store</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="icon" type="image/png" href="imagenes/favicon.png">
  <link rel="stylesheet" type="text/css" href="estiloindex.css">
  <link rel="stylesheet" type="text/css" href="imagenes">
</head>

<?php

function barraNavegacionIndex(){?>
  <hr>
      <ul>
          <img src="imagenes/amaterasu.jpg"  style="width: 250px; height: 64px;">
         <li><a class="active" href="inicio.php"><i class="material-icons">		&#xe8cc; </i></a></li>
           <li><a href="#news"><i class="material-icons">		&#xe0bf;  </i>Conocenos</a></li>
             <li style="float:right"><a class="active" href="#about"><i class="material-icons">  &#xe24e; </i>Ofertas</a></li>

               <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn"><i class="material-icons">	home  </i>Inicio</a>
              <div class="dropdown-content">
                 <a href="inicio.php">Ingresa!</a>
                 <a href="clases/formularioreg.php">Registrate!</a>
                    <a href="inicioadm.php">Administrador!</a>
            </div>
           </li>
      </ul>
<hr>
<?php }

function barraNavegacionDesp(){?>
    <center><h3<hr><font color="#9F0000" face="Cooper Black">Amaterasu Store te da la bienvenida!!</hr></h3></center></font>
<ul>
    <img src="imagenes/amaterasu.jpg"  style="width: 250px; height: 64px;">
    <li class="dropdown">
       <a href="javascript:void(0)" class="dropbtn"><i class="material-icons">	&#xe8a3;</i>Mi cuenta</a>

        <div class="dropdown-content">
            <a href=""><i class="material-icons">&#xe8b8;</i>Opciones</a>
              <a href="index.php"><i class="material-icons">&#xe879;</i>Salir</a>
       </div>
  </li>

   <li><a class="active" href="Carrito"><i class="material-icons">&#xe8cc; </i>Carrito</a></li>
     <li><a href="#contact"><i class="material-icons">&#xe870;  </i>Giros</a></li>
       <li><a href="#contact"><i class="material-icons">&#xe8d0;  </i>Puntos</a></li>
        <li><a href="#about"><i class="material-icons">&#xe8f6;  </i>Ofertas</a></li>
          <li><a href=aplicativodesp.php><i class="material-icons">home </i>Inicio</a></li>
</ul>
   <hr>

  <?php }

function botonesRedes(){?>
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
                   <a class="button5 button6" style="font-size: 30px;" title="Google +" href="https://plus.google.com/">
                     <span  class="fa fa-google-plus-square"></span>
                   </a>
                  </div>

                  <div class="relative3">
                      <a class="button7 button8" style="font-size: 30px;" title="Whatsapp" href="https://web.whatsapp.com/">
                     <span  class="fa fa-whatsapp"></span>
                    </a>

                </div>
                <div class="relative4">
                <a class="button9 button10" style="font-size: 30px;" title="Instagram" href="https://www.instagram.com/">
                <span  class="fa fa-instagram"></span>
                </a>

                 </div>
  </div>

<?php }

function barraAdministrador(){?>
  <hr>
    <ul>
         <img src="imagenes/amaterasu.jpg"  style="width: 250px; height: 64px;">

             </div>
               <li><a href="index.php"><i class="material-icons"> </i>Salir</a></li>
               </li>

              <li class="dropdown">
                   <a href="javascript:void(0)" class="dropbtn"><i class="material-icons"></i>Productos</a>
                <div class="dropdown-content">
                   <a href="curso1">Gestionar productos</a>
               </div>
              </li>

              <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn"><i class="material-icons"></i>Ofertas</a>
               <div class="dropdown-content">
               <a href="formulario.php">Iniciar</a>
                  <a href="formularioreg.php">Finalizar</a>
                </div>
                </li>

                 <li class="dropdown">
                      <a href="javascript:void(0)" class="dropbtn"><i class="material-icons"></i>Usuarios</a>
                       <div class="dropdown-content">
                        <a href="http://localhost/phpmyadmin/index.php?db=ukiyoshop&token=7daa6354c1479ff447d0e0b675febfd9">Control de usurios</a>
                       </div>
                </li>

             <li class="dropdown">
               <a href="javascript:void(0)" class="dropbtn"><i class="material-icons"></i>Pagos</a>
                <div class="dropdown-content">
                  <a href="formulario.php">Giros Acumulables</a>
                      <a href="formularioreg.php">Otros</a>
                  </li>
    </ul>

<hr>
<?php }
function footerPaginas(){?>
<footer>
      <center>
        <div style="background-color:silver;padding:100px; width: 90%; height: 50%; border-radius: 20px; border-top: 100px; border-bottom: 200px;">
            <h6 style="position: unset;margin-top: -80px; margin-right: 400px"><font color="#9F0000">Siguenos!!! </h6></font>
              <h6 style="position: relative; right: 1000px;"><font color="#9F0000">Amaterasu store</h6></font>
        <div>
                  <div class="relative">
                    <a class="button11 button12" style="font-size: 30px;" title="facebook" href="https://www.facebook.com/profile.php?id=100015973921079">
                     <span  class="fa fa-facebook-square"></span>
                      </a>
                        </div>

                         <div class="relative1">
                              <a class="button13 button14" style="font-size: 30px; " title="twitter" href="https://twitter.com/ukiyo2017">
                                <span  class="fa fa-twitter-square"></span>
                                 </a>
                              </div>

                                 <div class="relative2">
                                    <a class="button15 button16" style="font-size: 30px;" title="google" href="https://plus.google.com/">
                                     <span  class="fa fa-google-plus-square"></span>
                                     </a>
                                      </div>

                                     <div class="relative3">
                                      <a class="button17 button18" style="font-size: 30px;" title="whatsapp" href="https://web.whatsapp.com/">
                                        <span  class="fa fa-whatsapp"></span>
                                         </a>
                                          </div>

                                                <div class="relative4">
                                                      </a>
                                                          <a class="button19 button20" style="font-size: 30px;" title="instagram" href="https://www.instagram.com/">
                                                             <span  class="fa fa-instagram"></span>
                                                          </a>
                                                </div>

          </div>

                 <a href="call.jpg"><img src="imagenes/call.jpg" style="float:right; position: unset; width: 100px; height: 100px; margin: -600px ;padding: 0px; margin-top: -50px; border-radius: 50px;" >
                 <br>

                       <h6 style="position: relative; right: -650px;"><font color="#9F0000">Contactos</h6> </font>
                          <br><br>

                         <h6 style="font-size: 30px;position: relative; right: -840px;"><font color="#9F0000">316 4997839</h6></font>

                     </div>
             </center>
<?php }  ?>
