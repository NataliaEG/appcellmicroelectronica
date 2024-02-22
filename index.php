<?php
session_start();
if(isset($_SESSION['nombre'])){
    // En caso contrario redirigimos al visitante a otra página
    header('Location: login/login.php');
    die();
}


?>

<!doctype html>
<html lang="es">
  <head>
    <title>AppCell</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS v5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!--Style css-->
    <link rel="stylesheet" href="style.css">    

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/5976fd2c71.js" crossorigin="anonymous"></script>

    <!--Icono-->
    <link rel="icon" href="img/favicon-32x32.png" type="image/ico">
  </head>

<body>
  <!--inicio navbar-->
  <header>
    <div class="navbar">
      <div class="logo">
        <a href="#">
          <img src="./img/logo-principal.png" width="75px" style=" padding:  15px;" alt="" srcset="">
        </a>
      </div>
      <ul class="links">

        <li>
          <a href="index.php">Inicio</a>
        </li>

        <li>
          <a href="#titulo_dispositivo">Ver mi equipo</a>
        </li>

        <li>
          <a href="#titulo_servicios">Nosotros</a>
        </li>

        <li>
          <a href="#titulo_reparacion">Servicios</a>
        </li>

        <li>
          <a href="#titulo_trabajos">Trabajos</a>
        </li>

        <li>
          <a href="#titulo_contacto">Contacto</a>
        </li>

        

        <li>
          <a href="login/login.php" class="action_btn">      
            <i class="fas fa-user"></i>
          </a>
        </li>
      </ul>

      <div class="toggle_btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>

    <div class="dropdown_menu">
        <li>
            <a href="index.php">Inicio</a>
        </li>

        <li>
          <a href="#titulo_dispositivo">Ver mi equipo</a>
        </li>

        <li>
          <a href="#titulo_servicios">Nosotros</a>
        </li>

        <li>
          <a href="#titulo_reparacion">Servicos</a>
        </li>

        <li>
          <a href="#titulo_trabajos">Trabajos</a>
        </li>
        
        <li>
          <a href="#titulo_contacto">Contacto</a>
        </li>
        
        <li>
          <a href="login/login.php" class="action_btn">      
             Registrarse
          </a>        
        </li>
    </div>
  </header>
 <!--fin navbar-->


<!--Inicio Parte principal-->
<div class="col-sm-6 col-md-12 imagen_fondo text-center">
    <div  class="texto-imagen">
    </div>
  </div>         
<!--fin Parte principal-->
<div class="container">


<!-- Inicio Tarjetas de reparacion-->
<h3 id="titulo_reparacion" class="text-center mt-5 mb-5"><img src="img/destornillador-icono.png" width="30px"> Realizamos la reparacion de equipos:</h3>

<div class="container-card mt-3 mb-3">
  <div class="product">
    <div class="product-card mt-3 mb-3">
      <h2 class="name">Macbook</h2>
      <p class="costo">Contamos con un equipo de expertos en reparación de MacBook que se encargará de solucionar cualquier problema que pueda presentar tu dispositivo, utilizando piezas de repuesto originales y brindando un servicio rápido y eficiente.</p>
      <img src="https://i.pinimg.com/originals/c5/95/c9/c595c9dc092cb7fbfecedde02a6952ae.png"  class="product-img">
    </div>
    
    <div class="popup-view">
        <div class="popup-card">
          <a href="#"><i class="fas fa-times close-btn"></i></a>
         <div class="product-img">
            <img src="https://i0.wp.com/imgs.hipertextual.com/wp-content/uploads/2022/08/apple_macbook_reparacion.jpg?fit=1200%2C800&quality=50&strip=all&ssl=1" style="left: 0%;  width: 360px; height: 100%;" alt="">
          </div>
          <div class="info">
              <h3>Reparacion de Macbook</h3>
              <p>
                Lorem, ipsum dolor sit amet 
                consectetur adipisicing elit. 
                Aliquam tempore culpa soluta 
                sint laborum voluptatem.
              </p>
              <!--<span class="price">$120.000</span>-->
              <!--<a href="#" class="add-cart-btn">Add to cart</a>-->
          </div>
        </div>
    </div>
  </div>

  <div class="product">
    <div class="product-card mt-3 mb-3">
      <h2 class="name">Celulares Iphone</h2>
      <p class="costo">Nuestro equipo de especialistas en reparación de iPhone está preparado para resolver cualquier inconveniente que pueda surgir en tu dispositivo, proporcionando un servicio ágil y confiable con el uso de repuestos genuinos.</p>
      <img src="https://pngimg.com/d/iphone_14_PNG6.png"  class="product-img">
    </div>
    <div class="popup-view">
        <div class="popup-card">
          <a href="#"><i class="fas fa-times close-btn"></i></a>
          
          <div class="product-img">
            <img src="https://s1.eestatic.com/2022/04/27/omicrono/hardware/668194010_223888425_1024x576.jpg" style="left: 0%;  width: 360px; height: 100%;" alt="">
          </div>

          <div class="info">
              <h3>Reparacion de Iphones</h3>
              <p>
                Lorem, ipsum dolor sit amet 
                consectetur adipisicing elit. 
                Aliquam tempore culpa soluta 
                sint laborum voluptatem.
              </p>
              <!--<span class="price">$120.000</span>-->
              <!--<a href="#" class="add-cart-btn">Add to cart</a>-->
          </div>
        </div>
    </div>
  </div>

  <div class="product">
    <div class="product-card mt-3 mb-3">
      <h2 class="name">Ipad</h2>
      <p class="costo">Nuestro equipo está capacitado para solucionar cualquier problema, ya sea relacionado con la pantalla, la batería, el software u otros inconvenientes, ofreciendo un servicio confiable y eficiente para que puedas disfrutar nuevamente de tu iPad.</p>
      <img src="./img/ipad.png"  class="product-img">
    </div>
    <div class="popup-view">
        <div class="popup-card">
          <a href="#"><i class="fas fa-times close-btn"></i></a>
          
          <div class="product-img">
            <img src="https://s1.eestatic.com/2022/04/27/omicrono/hardware/668194010_223888425_1024x576.jpg" style="left: 0%;  width: 360px; height: 100%;" alt="">
          </div>

          <div class="info">
              <h3>Reparacion de Iphones</h3>
              <p>
                Lorem, ipsum dolor sit amet 
                consectetur adipisicing elit. 
                Aliquam tempore culpa soluta 
                sint laborum voluptatem.
              </p>
              <!--<span class="price">$120.000</span>-->
              <!--<a href="#" class="add-cart-btn">Add to cart</a>-->
          </div>
        </div>
    </div>
  </div>

  <div class="product">
    <div class="product-card mt-3 mb-3">
      <h2 class="name">Apple Watch</h2>
      <p class="costo">En nuestro centro de reparación especializado, nos enfrentamos a cualquier obstáculo que pueda surgir en tu dispositivo. Puedes tener la tranquilidad de que restauraremos tu Apple Watch a su estado óptimo, permitiéndote aprovechar al máximo todas sus funcionalidades.</p>
      <img src="https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP877/apple-watch-se-2nd-gen.png"  class="product-img">
    </div>
    <div class="popup-view">
        <div class="popup-card">
          <a href="#"><i class="fas fa-times close-btn"></i></a>
          
          <div class="product-img">
            <img src="          https://naranjacenter.es/wp-content/uploads/2020/10/reparar-apple-watch.jpg" style="left: 0%;  width: 360px; height: 100%;" alt="">
          </div>
          <div class="info">
              <h3>Reparacion de Apple Watch</h3>
              <p>
                Lorem, ipsum dolor sit amet 
                consectetur adipisicing elit. 
                Aliquam tempore culpa soluta 
                sint laborum voluptatem.
              </p>
              <!--<span class="price">$120.000</span>-->
              <!--<a href="#" class="add-cart-btn">Add to cart</a>-->
          </div>
        </div>
    </div>
  </div>

</div>
<!-- Fin Tarjetas de reparacion-->


<!--Inicio cuadros-->
<h3 id="titulo_servicios" class="text-center mt-5 mb-5">
  
  <img src="img/manos-icono.png" width="30px">Te proporcionamos:</h3>   
  
  <div id="cuadros" class="mt-3 mb-3">
      <div id="cuadro_bg" class="col-6 col-sm-12 text-center mt-3">
        <h4><i class="fas fa-paste"></i><strong> Presupuesto</strong></h4>
        <p>Utiliza nuestra herramienta de presupuestos en línea, sin ningún compromiso, para verificar las tarifas de reparación de tu dispositivo y obtener una estimación precisa de los costos antes de tomar cualquier decisión.</p>
      </div>

      <div id="cuadro_bg" class="col-6 col-sm-12 text-center mt-3">
        <h4><i class="fas fa-dollar-sign"></i><strong> Descuento</strong></h4>
        <p>En caso de que se requiera reparar múltiples componentes en tu dispositivo Apple, te brindamos la opción de disfrutar de descuentos aplicables al precio total de la reparación, asegurando así un beneficio económico adicional para ti.</p>
      </div>

      <div id="cuadro_bg" class="col-6 col-sm-12 text-center mt-3">
        <h4><i class="fas fa-truck"></i><strong>Recepción de equipos desde cualquier punto del país</strong></h4>
        <p>Con nuestro servicio de Recepción Nacional, nos aseguramos de que la distancia no sea un obstáculo para recibir la atención que tus equipos merecen.</p>
      </div>

      <div id="cuadro_bg" class="col-6 col-sm-12 text-center mt-3">
        <h4><i class="fas fa-credit-card"></i><strong> Realiza el pago</strong></h4>

        <p>Ofrecemos diversas opciones de pago, incluyendo tarjetas de crédito, transferencias bancarias y pagos en efectivo, para brindarte flexibilidad y comodidad al momento de abonar por nuestros servicios</p>
      </div>
  </div>
<!--Fin cuadros-->


<!--Inicio Sobre Nosotros-->
<h3 id="titulo_servicios" class="text-center mt-5 mb-5"><i class="fas fa-user"></i> Sobre Nosotros</h3>

<div class="contenedor mt-3 mb-3">
  <div class="text">
    <h3  class="text-seccion">Nosotros</h3> 
    <p>Somos especialista en reparación y servicio <br>
      técnico de dispositivos Apple en Argentina. <br>
      Contamos con un laboratorio propio de <br>
      microelectrónica, ademas de capacitación permanente y<br>
      personal calificado. Trabajamos con los mejores <br>
      repuestos homologados, con amplio stock y las <br>
      mejores herramientas en constante actualización. <br> 
      Si buscas una solucion seria y confiable, te <br>
      esperamos. Solicita tu presupuesto y pone tu <br>
      dispositivos en manos de verdaderos <br>
      profesionales. <br>
  </div>
    <img src="img/appcell-2.jpg" class="imagen" id="imagen_appcell" >
  </p>
</div>
<!-- Fin sobre nosotros -->
      


<!--inicio carrousel-->
<h3 id="titulo_trabajos" class="text-center text-center mt-5 mb-5">
  
  <img src="img/destornillador-icono.png" width="30px">
    Trabajos Realizados
  </h3>

<div class="carrusel-list mt-3 mb-3" id="carrusel-list1">
  <!-- Botón previo -->
  <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev" onclick="(event,1)">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
        class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 320 512">
        <path fill="currentColor"
            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
        </path>
    </svg>
  </button>

  <!-- Contenedor del carrusel -->
  <div class="carrusel-track" id="track1">
      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card">
              <img src="img/slider-img1.JPG">
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <img src="img/slider-img2.JPG">
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <img src="img/slider-img3.JPG">
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <img src="img/slider-img4.JPG">
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">  
              <img src="img/slider-img5.JPG">
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">   
              <img src="img/slider-img6.JPG">
            </div>
          </a>
        </div>
      </div>
  </div>

  <!-- Botón siguiente -->
  <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next" onclick="(event, 1)">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
        class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 320 512">
        <path fill="currentColor"
            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
        </path>
    </svg>
  </button>
</div>
<!--Fin carrousel-->


<!--inicio form-contacto-->
  <h3 id="titulo_contacto" class="text-center mt-5 mb-5">
    <img src="img/hoja-icono.png" width="30px"> 
    Formulario de Contacto
  </h3>

  <div class="container-form-contacto">
    <div class="box-info">


      <div class="data">
            <h3>Complete este formulario para contactarnos</h3>

        <a href="https://api.whatsapp.com/send/?phone=543757528025&text&type=phone_number&app_absent=0"><i class="fas fa-phone"></i> WhatsApp: 3757528025</a>
        <a href= "https://www.instagram.com/appcell_microelectronica"><i class="fa fa-instagram"></i> Instagram: appcell_microelectronica</a>
        <a href= "https://www.facebook.com/appcellresistencia" ><i class="fa fa-facebook"></i> Facebook: appcell_resistencia</a>
      </div>
    </div>
    
    <form id="contact-form" class="form-cons" action="https://formsubmit.co/nataliagomez2808@gmail.com" method="POST">
      <div class="input-box">
          <input type="text" id="nombre" name="nombre" class="form-input"  placeholder="Escriba su nombre">
          <i class="fas fa-user"></i>
      </div>
      
      <div class="input-box">
        <input type="text" id="contacto" name="contacto" class="form-input"  placeholder="Escriba su correo o numero de telefono">
        </div>

      <div class="input-box">
        <select id="modelo" name="modelo" required>
          <option value="">Seleccionar modelo</option>
          <option value="iPhone 6"> iPhone 6 </option>
          <option value="iPhone 14 Pro Max"> iPhone 14 Pro Max </option>
          <option value="iPhone 14 pro"> iPhone 14 pro </option>
          <option value="iPhone 14"> iPhone 14 </option>
          <option value="iPhone 13 Pro Max"> iPhone 13 Pro Max </option>
          <option value="iPhone 13 pro"> iPhone 13 pro </option>
          <option value="iPhone 13 mini"> iPhone 13 mini  </option>
          <option value="iPhone 13"> iPhone 13  </option>
          <option value="iPhone 12 Pro Max"> iPhone 12 Pro Max </option>
          <option value="iPhone 12 pro"> iPhone 12 pro</option>
          <option value="iPhone 12 mini"> iPhone 12 mini </option>
          <option value="iPhone 12"> iPhone 12 </option>
          <option value="iPhone 11 Pro Max"> iPhone 11 Pro Max</option>
          <option value="iPhone 11 pro"> iPhone 11 pro  </option>
          <option value="iPhone 11"> iPhone 11 </option>
          <option value="iPhone XR"> iPhone XR </option>
          <option value="iPhone XS Max"> iPhone XS Max </option>
          <option value="iPhone XS"> iPhone XS </option>
          <option value="iPhone X "> iPhone X </option>
          <option value="iPhone 8 Plus"> iPhone 8 Plus </option>
          <option value="iPhone 8 "> iPhone 8  </option>
          <option value="iPhone 7 Plus"> iPhone 7 Plus </option>
          <option value="iPhone 7 "> iPhone 7 </option>
          <option value="iPhone 6s Plus"> iPhone 6s Plus </option>
          <option value="iPhone 6s"> iPhone 6s </option>
          <option value="iPhone 6 Plus"> iPhone 6 Plus </option>
        </select>
      </div>
      <div class="input-box">
        <select id="problema" name="problema" required>
          <option value="">Seleccionar problema</option>
          <option value="Cables o adaptadores "> Cables o adaptadores </option>
          <option value="Daño por agua o líquido Problema audio<"> Daño por agua o líquido Problema audio </option>
          <option value="Equipo lento "> Equipo lento </option>
          <option value="No enciende"> No enciende </option>
          <option value="Cámara no funciona"> Cámara no funciona </option>
          <option value="Cambio de batería"> Cambio de batería </option>
          <option value="Tapa trasera rota"> Tapa trasera rota </option>
          <option value="Pantalla rota"> Pantalla rota </option>
          <option value="Otros"> Otros </option>
        </select>
      </div>

      <div class="input-box">
        <textarea id="mensaje" name="mensaje" class="form-textarea" placeholder="Escriba su mensaje"></textarea>
      </div>

      <button type="submit" name="submit" value="enviar">Enviar</button>
      <input type="hidden" name="_next" value="https://appcelstore.000webhostapp.com/index.php">
      <input type="hidden" name="_captcha" value="false">
      <input type="hidden" name="_autoresponse" value="Mensaje enviado">

    </form>
  </div>
<!--Fin form-contacto-->

<!--Inicio Formulario consulta-->
      <h3 id="titulo_dispositivo" class="text-center mt-5 mb-5"><img src="img/hojo-icono.png" width="30px"> Ver estado de mi equipo</h3>
      <div class="container formconsulta">
          <h4>Verificación de código de consulta</h4>
          <p>Por favor, ingrese el 
            código que le proporcionamos
             para rastrear el estado de 
             su equipo mientras se 
             encuentra en nuestro centro
              de reparación.
          </p>
          <form id="myForm">
              <div class="form-group">
                  <input type="text" class="form-control" id="codigo"   name="codigo" required>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Verificar</button>
          </form>
      </div>

      <div id="modalData" class="modal fade" tabindex="-1"  role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Datos del cliente</h5>
                  <button type="button" class="close btn btn-dark" data-dismiss="modal" aria-label="Cerrar">x</button>

              </div>
              <div class="modal-body">
                <div id="modalContent"></div>
              </div>
            </div>
        </div>
      </div>
  
<!--Fin Formulario consulta-->



<!-- Inicio carrousel Instagram-->
<h3 id="titulo_instagram" class="text-center mt-5 mb-5"><img src="img/instagram-icono-blanco.png" width="30px" alt="" srcset=""> Publicaciones De Instagram:</h3>

<div class="carrusel-list mt-3 mb-3" id="carrusel-list2">
  <!-- Botón previo -->
  <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev" onclick="(event, 2)">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
        class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 320 512">
        <path fill="currentColor"
            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
        </path>
    </svg>
  </button>

  <!-- Contenedor del carrusel -->
  <div class="carrusel-track" id="track2">
      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/COs7bhpgv7Z/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/CPlh-vMAb2O/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/CWOOVYFApCJ/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/CCeZQzCh5ru/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/CEnaD5Nh69Y/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/CABtRFyJYlT/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>
  </div>

  <!-- Botón siguiente -->
  <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next" onclick="(event, 2)">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
        class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 320 512">
        <path fill="currentColor"
            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
        </path>
    </svg>
  </button>
</div>

</div>
</div>
<!--Inicio Footer--> 
<footer class="mt-5">
  <!-- <img src="./img/logo-principal.png" width="45px" alt="" srcset=""> -->
  <div class="social-icons-container">
    <a href="https://www.instagram.com/appcell_microelectronica" class="social-icon bg3"><i class="fa fa-instagram"></i></a>
    <a href="https://www.facebook.com/appcellresistencia" class="social-icon bg1"><i class="fa fa-facebook"></i></a>
    <a href="https://api.whatsapp.com/send/?phone=543757528025&text&type=phone_number&app_absent=0" class="social-icon bg2" ><i class="fa fa-whatsapp"></i></a>
  </div>
  <ul class="footer-menu-container">
    <!-- <li class="menu-item">Nosotros</li>
    <li class="menu-item">Servicios</li>
    <li class="menu-item">Trabajos</li> -->
  </ul>
  <span>Copyright &copy;  AppCell 2024</span>
</footer>
<!--Fin Footer--> 

<script src="script.js"></script>

</body>
  <!-- Popper js Development version -->
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>


