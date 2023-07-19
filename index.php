<?php
  include("conexion.php");
?>

<!doctype html>
<html lang="es">
        <head>
          <title>Appcel</title>
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
                      <img src="./img/circulo.png" width="45px" alt="" srcset="">
                    </a>
                  </div>
                                  <ul class="links">

                                    <li>
                                      <a href="index.php">Inicio</a>
                                    </li>

                                    <li>
                                      <a href="#titulo_nosotros">Nosotros</a>
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
                                      <a href="login/login.html" class="action_btn">      
                                        <img src="./img/usuario-icono.png" width="45px" alt="" srcset="">
                                      </a>
                                    </li>
                                  </ul>

                  <div class="toggle_btn">
                    <i class="fas fa-bars"></i>
                  </div>
    </div>

            <div class="dropdown_menu">
                      <li>
                        <a href="index.php">
                        <img id="icono_inicio" src="img/inicio-icono.png" width="25px"> Inicio</a>
                      </li>

                      <li><a href="#titulo_nosotros">
                        <img id="icono_nosotros" src="img/nosotros-icono.png" width="25px"> Nosotros</a></li>
                      <li>
                        <a href="#titulo_trabajos">
                        <img id="icono_trabajos" src="img/trabajos-iconos.png" width="25px"> Trabajos</a>
                      </li>
                      
                      <li>
                        <a href="#titulo_contacto">
                        <img id="icono_contacto" src="img/telefono-icono.png" width="25px"> Contacto</a>
                      </li>
                      
                      <li>
                        <a href="login/login.html" class="action_btn"> Registrarse</a>
                      </li>
            </div>
  </header>
 <!--fin navbar-->

<div class="container">
          <!--Inicio Parte principal-->
            <div class="col-sm-6 col-md-12 imagen_fondo text-center">
                    <div  class="texto-imagen">
                      <!-- <h1>Appcell<img id="appel-icono" src="img/appel-icono.png" width="50px"></h1> -->
                        <p> 
                        </p>
              </div>
            </div>      
          <!--fin Parte principal-->



<!--Inicio Sobre Nosotros-->
 
<div id="titulo_nosotros"> 
      <div class="container-nosotros mt-4 ">
        <div class="row-nosotros" id="texto_imagen">
          <div id="quienes_somos_texto" >
                  <h3  class="text-seccion">  Nosotros</h3> 

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
                    </p>
          </div>

          <div>
            <img src="img/appcell-2.jpg" class="img-nosotros" id="imagen_appcell" >
          </div>

        </div>
  </div>
</div>
       

 



<!--Inicio cuadros-->
<h3 id="titulo_servicios" class="text-center mt-4"> </h3>   
  
  <div id="cuadros" class=" mt-3">

      <div id="cuadro_bg" class="col-6 text-center mt-3">
        <h4><i class="fas fa-paste"></i><strong> Presupuesto</strong></h4> 
        <p>Utiliza nuestra herramienta de presupuestos en línea, sin ningún compromiso, para verificar las tarifas de reparación de tu dispositivo y obtener una estimación precisa de los costos antes de tomar cualquier decisión.</p>
      </div>

      <div id="cuadro_bg" class="col-6 text-center mt-3">
        <h4><i class="fas fa-dollar-sign"></i><strong> Descuento</strong></h4> 
        <p>En caso de que se requiera reparar múltiples componentes en tu dispositivo Apple, te brindamos la opción de disfrutar de descuentos aplicables al precio total de la reparación, asegurando así un beneficio económico adicional para ti.</p>
      </div>

      <div id="cuadro_bg" class="col-6 text-center mt-3">
        <h4><i class="fas fa-truck"></i><strong> Recepción de equipos desde cualquier punto del país</strong></h4> 
        <p>Con nuestro servicio de Recepción Nacional, nos aseguramos de que la distancia no sea un obstáculo para recibir la atención que tus equipos merecen.</p>
      </div>

      <div id="cuadro_bg" class="col-6 text-center mt-3">
        <h4><i class="fas fa-credit-card"></i><strong> Realiza el pago</strong></h4> 
        <p>Ofrecemos diversas opciones de pago, incluyendo tarjetas de crédito, transferencias bancarias y pagos en efectivo, para brindarte flexibilidad y comodidad al momento de abonar por nuestros servicios</p>
      </div>
  </div>
<!--Fin cuadros-->


 
<!-- Inicio Tarjetas de reparacion-->
<h3 id="titulo_reparacion" class="text-center"><img src="img/destornillador-icono.png" width="30px"> Brindamos servicio de reparación para todos tus equipos </h3>

<div class="container-card">

  <div class="product">
    <div class="product-card">
      <h2 class="name">Macbook</h2>
     <p class="costo">Contamos con un equipo de expertos en reparación de MacBook que se encargará de solucionar cualquier problema que pueda presentar tu dispositivo, utilizando piezas de repuesto originales y brindando un servicio rápido y eficiente.</p>
       <a href="#" class="popup-btn">Mas Informacion</a>
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
    <div class="product-card">
      <h2 class="name"> Iphone</h2>
      <p class="costo">Nuestro equipo de especialistas en reparación de iPhone está preparado para resolver cualquier inconveniente que pueda surgir en tu dispositivo, proporcionando un servicio ágil y confiable con el uso de repuestos genuinos.</p> 
      <a href="#" class="popup-btn">Mas Informacion</a>
      <img src="./img/iphone14.png"  class="product-img">
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
    <div class="product-card">
      <h2 class="name">Ipad</h2>
      <p class="costo">Nuestro equipo está capacitado para solucionar cualquier problema, ya sea relacionado con la pantalla, la batería, el software u otros inconvenientes, ofreciendo un servicio confiable y eficiente para que puedas disfrutar nuevamente de tu iPad.</p> 
      <a href="#" class="popup-btn">Mas Informacion</a>
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
    <div class="product-card">
      <h2 class="name">Apple Watch</h2>
      <p class="costo">En nuestro centro de reparación especializado, nos enfrentamos a cualquier obstáculo que pueda surgir en tu dispositivo. Puedes tener la tranquilidad de que restauraremos tu Apple Watch a su estado óptimo, permitiéndote aprovechar al máximo todas sus funcionalidades.</p> 
      <a href="#" class="popup-btn">Mas Informacion</a>
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
 

 

 
<!--inicio carrousel-->
  <h3 id="titulo_trabajos" class="  text-center text-center mt-5 mb-4">
  <img src="img/destornillador-icono.png" width="30px">
    Trabajos Realizados
  </h3>

       <div class="container-slider">
            <div class="slides">
              <div class="slide">
                <img class="img" src="img/gif-trabajos1.gif" alt="imagen 1" loading="lazy">
                
              </div>

              <div class="slide">
                <img class="img" src="img/gif-trabajos1.gif" alt="imagen 2" loading="lazy">
              </div>

              <div class="slide">
                <img class="img" src="img/gif-trabajos1.gif" alt="imagen 3" loading="lazy">
              </div>

              <div class="slide">
                <img class="img" src="img/gif-trabajos1.gif" alt="imagen 4" loading="lazy">
              </div>
            </div>

            <div class="slide-controls">
                    <button id="prev-btn">
                      <i class="fas fa-chevron-left"></i>
                    </button>

                    <button id="next-btn">
                      <i class="fas fa-chevron-right"></i>
                    </button>
            </div>

     </div>
<!--Fin carrousel-->


<!--inicio form-contacto--> 
  <h3 id="titulo_contacto" class="text-center mt-5 mb-2">
    <img src="img/hoja-icono.png" width="30px"> 
    Formulario de Contacto
  </h3>

  <div class="container-form-contacto">
    <div class="box-info">
    <h3>Complete este formulario para contactarnos</h3>
 

      <!-- <div class="links">
          <a href="#"><i class="fas fa-square-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
      </div> -->
    </div>
    
    <form id="contact-form" method="POST" class="form-cons">
      <div class="input-box">
          <input type="text" id="nombre" name="nombre" class="form-input"  placeholder="Escriba su nombre">
          <!-- <input type="text" required placeholder="Nombre y apellido"> -->
          <i class="fas fa-user"></i>
      </div>

      <div class="input-box">
        <select id="modelo" name="modelo" required>
          <option value="">Selecciona tu dispositivo</option>
          <option value="Modelo 1">Iphone 14</option>
          <option value="Modelo 2">Iphone 13</option>
          <option value="Modelo 3">Iphone 12</option>
          <option value="Modelo 4">Iphone 11</option>
          <option value="Modelo 5">Iphone X</option>
          <option value="Modelo 6">Iphone 8</option>
          <option value="Modelo 7">Iphone 7</option>
          <option value="Modelo 8">Iphone 6</option>
          <option value="Modelo 9">Ipad</option>
          <option value="Modelo 10">Macbook</option>
          <option value="Modelo 11">Apple whatch</option>
          <option value="Modelo 12">Otro </option>
        </select>
      </div>

      <div class="input-box">
        <select id="problema" name="problema" required>
          <option value="">Selecciona el problema</option>
          <option value="Problema 1">Pantalla</option>
          <option value="Problema 2">Vidrio trasero</option>
          <option value="Problema 3">Bateria</option>
          <option value="Problema 4">Camaras</option>
          <option value="Problema 5">Placa</option>
          <option value="Problema 6">Otro problema</option>
        </select>
      </div>

      <div class="input-box">
        <textarea id="mensaje" name="mensaje" class="form-textarea" placeholder="Escriba su mensaje"></textarea>
      </div>

      <button type="submit" name="submit" value="enviar">Enviar</button>
    </form>
  </div>
<!--Fin form-contacto-->

<!--Inicio Formulario consulta--> 
      <h3 id="titulo_dispositivo" class="text-center mt-5 mb-5"><img src="img/hojo-icono.png" width="30px"> Estado de su dispositivo</h3>
      <div class="container formconsulta">
          <h4>Por favor, ingrese el código que le proporcionamos para rastrear el estado de su equipo mientras se encuentra en nuestro centro de reparación.</h4>
          <form id="myForm">
              <div class="form-group">
                  <input type="text" class="form-control" id="codigo" name="codigo" required placeholder="Ingrese su codigo">
              </div>
              <button type="submit" class="btn btn-primary mt-3">Verificar</button>
          </form>
      </div>

      <div id="modalData" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Datos del cliente</h5>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div id="modalContent"></div>
              </div>
          </div>
        </div>
      </div>
  
<!--Fin Formulario consulta-->

 
<!-- Inicio Instagram-->
<h3 id="titulo_instagram" class="text-center mt-4 mb-5"> Seguinos en nuestro instagram</h3>
  

<div class="carrusel-list" id="carrusel-list">
    <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
      onclick="app.processingButton(event)">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
          class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 320 512">
          <path fill="currentColor"
              d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
          </path>
      </svg>
    </button>

    <div class="carrusel-track" id="track">
      
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

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/B_Vv3oepUMS/embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </a>
        </div>
      </div>

      <div class="carrusel2">
        <div>
          <a href="#">
            <div class="card text-center">
              <iframe id="sds" width="270" height="440" src="https://www.instagram.com/p/CFvA23pBDlg/embed" frameborder="0" scrolling="no"></iframe>
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

      <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
        onclick="app.processingButton(event)">
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

    
<!-- Fin Instagram-->


</div>

<!--Inicio Footer--> 
<footer class="mt-5">
  <!-- <img src="./img/logo-principal.png" width="45px" alt="" srcset=""> -->

  <div class="footer-container">
          <ul class="footer-menu-container">
             <li class="menu-item">Nosotros</li>
            <li class="menu-item">Servicios</li>
            <li class="menu-item">Trabajos</li>  
          </ul>

          <ul class="footer-menu-container">
             <li class="menu-item">Nosotros</li>
            <li class="menu-item">Servicios</li>
            <li class="menu-item">Trabajos</li>  
          </ul>

          <ul class="footer-menu-container">
             <li class="menu-item"><img src="img/whatsapp-logo.png" width="45px" alt="" srcset="">Nosotros</li>
            <li class="menu-item"><img src="img/whatsapp-logo.png" width="45px" alt="" srcset="">Nosotros</li>
            <li class="menu-item"><img src="img/whatsapp-logo.png" width="45px" alt="" srcset="">Nosotros</li>  
          </ul>
          
         
  </div>

  <span>Copyright &copy;  Appcel 2023</span>
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


