<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Oswald&family=PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

<!-- site-header  -->
<?php  include_once("includes/templates/header.php")?>
<!-- site-header  -->



  <!--<p id='auditor'>auditor</p>-->
  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>Sit amet consectetur adipisicing elit. Beatae autem aliquam quas numquam nam ea? Molestiae ab inventore veritatis voluptatem eaque repellat nemo quae veniam. Laudantium animi ipsam blanditiis quos?</p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogg">
      </video>
    </div>
    <div class="contenedor-programa contenedor">
      <div class="programa-evento">
        <h2>Programa del Evento</h2>
        <nav class="menu-programa">
          <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres<span class="fas fa-caret-down flecha"></span></a>
          <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i> Conferencias <span class="fas fa-caret-down flecha"></span></a>
          <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i> Seminarios <span class="fas fa-caret-down flecha"></span></a>
        </nav>

        <div id="talleres" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>HTML, CSS3 y Javascript</h3>
            <p><i class="far fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
            <p><i class="far fa-calendar-alt" aria-hidden="true"></i> 10 de Dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Juan Pablo de la Torre</p>
          </div>
          <div class="detalle-evento">
            <h3>Responsive Web Desing</h3>
            <p><i class="far fa-clock" aria-hidden="true"></i> 20:00 hrs</p>
            <p><i class="far fa-calendar-alt" aria-hidden="true"></i> 10 de Dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Juan Pablo de la Torre</p>
          </div>
          <a class="button float-right" href="#">Ver todos</a>
        </div> <!--info-curso-->

        <div id="conferencias" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Como ser freelance</h3>
            <p><i class="far fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
            <p><i class="far fa-calendar-alt" aria-hidden="true"></i> 10 de Dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Gregorio Sanchez</p>
          </div>
          <div class="detalle-evento">
            <h3>Tecnolog&iacute;as del futuro</h3>
            <p><i class="far fa-clock" aria-hidden="true"></i> 17:00 hrs</p>
            <p><i class="far fa-calendar-alt" aria-hidden="true"></i> 10 de Dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Susan Sanchez</p>
          </div>
          <a class="button float-right" href="#">Ver todos</a>
        </div> <!--info-curso-->

        <div id="seminarios" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Diseño IU/UX para m&oacute;viles</h3>
            <p><i class="far fa-clock" aria-hidden="true"></i> 17:00 hrs</p>
            <p><i class="far fa-calendar-alt" aria-hidden="true"></i> 11 de Dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Harold Garcia</p>
          </div>
          <div class="detalle-evento">
            <h3>Aprende a programar en un d&iacute;a</h3>
            <p><i class="far fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
            <p><i class="far fa-calendar-alt" aria-hidden="true"></i> 10 de Dic</p>
            <p><i class="fas fa-user" aria-hidden="true"></i> Susana Rivera</p>
          </div>
          <a class="button float-right" href="#">Ver todos</a>
        </div> <!--info-curso-->
      </div>
    </div>
  </section> <!-- porgrama -->


  <section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="imagen invitado">
          <p>Rafael Bautista</p>
        </div>

        <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="imagen invitado">
          <p>Shari Herrera</p>
        </div>
      </li>



      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="imagen invitado">
          <p>Gregorio Sanchez</p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="imagen invitado">
          <p>Susana Rivera</p>
        </div>
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="imagen invitado">
          <p>Harold Garcia</p>
        </div>
      </li>
      </li>

      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="imagen invitado">
          <p>Susana Sachez</p>
        </div>
      </li>

    </ul> <!-- lista-invitados -->

  </section>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li>
          <p class="numero">0</p>
          Invitados
        </li>
        <li>
          <p class="numero">0</p>
          Talleres
        </li>
        <li>
          <p class="numero">0</p>
          D&iacute;as
        </li>
        <li>
          <p class="numero">0</p>
          Conferencias
        </li>
      </ul>
    </div>
  </div>


  <section class="seccion">
    <div class="contenedor">

      <div class="lista-precios clearfix">
        <div class="tarjeta-precio">
          <div class="contenido-precio clearfix">
            <h3>Pase por d&iacute;a</h3>
            <p class="numero">$30</p>
            <ul>
              <li><i class="fa fa-check"></i> Bocadillos Gratis</li>
              <li><i class="fa fa-check"></i> Todas las conferencias</li>
              <li><i class="fa fa-check"></i> Todos los Talleres</li>
              <a href="registro.html" class="button hollow">comprar</a>
            </ul>
          </div> <!--contenido precios-->
        </div><!--tarjeta precio-->

        <div class="tarjeta-precio">
          <div class="contenido-precio">
            <h3>Todos los d&iacute;as</h3>
            <p class="numero">$50</p>
            <ul>
              <li><i class="fa fa-check"></i> Bocadillos Gratis</li>
              <li><i class="fa fa-check"></i> Todas las conferencias</li>
              <li><i class="fa fa-check"></i> Todos los Talleres</li>
              <a href="registro.html" class="button">comprar</a>
            </ul>
          </div><!--contenido precios-->

        </div><!--tarjeta precio-->

        <div class="tarjeta-precio">
          <div class="contenido-precio">
            <h3>Pase por 2 d&iacute;as</h3>
            <p class="numero">$30</p>
            <ul>
              <li><i class="fa fa-check"></i> Bocadillos Gratis</li>
              <li><i class="fa fa-check"></i> Todas las conferencias</li>
              <li><i class="fa fa-check"></i> Todos los Talleres</li>
              <a href="registro.html" class="button hollow">comprar</a>
            </ul>
          </div><!--contenido precios-->
        </div><!--tarjeta precio-->

      </div> <!--lista-precios-->
    </div>
  </section>

  <div id="mapa" class="mapa">

  </div>

  <section class="seccion">
    <h2>Testimoniales</h2>

    <div class="contenedor-testimonial contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis eius quasi ducimus, aliquam nostrum corrupti. Officiis cum quo dolore cupiditate corporis veniam nobis id incidunt in. Magnam, animi eligendi.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador den @prisma</span></cite>
          </footer>
        </blockquote>
      </div> <!-- testimonial-->

      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis eius quasi ducimus, aliquam nostrum corrupti. Officiis cum quo dolore cupiditate corporis veniam nobis id incidunt in. Magnam, animi eligendi.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador den @prisma</span></cite>
          </footer>
        </blockquote>
      </div> <!-- testimonial-->

      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis eius quasi ducimus, aliquam nostrum corrupti. Officiis cum quo dolore cupiditate corporis veniam nobis id incidunt in. Magnam, animi eligendi.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador den @prisma</span></cite>
          </footer>
        </blockquote>
      </div> <!-- testimonial-->

    </div>

  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>reg&iacute;strate al newsletter:</p>
      <h3>GdlWebCamp</h3>
      <a href="registro.html" class="button transparente">Registro</a>
    </div>
  </div>

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contendor">
      <ul class="clearfix">
        <li>
          <p id='dias' class="numero">80</p>
          d&iacute;as
        </li>
        <li>
          <p id='horas' class="numero">15</p>
          horas
        </li>
        <li>
          <p id='minutos' class="numero">5</p>
          minutos
        </li>
        <li>
          <p id='segundos' class="numero">30</p>
          segundos
        </li>
      </ul>
    </div>
  </section>

  <!-- site-footer  -->
  <?php include_once("includes/templates/footer.php") ?>
  <!-- site-footer  -->
  

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/vendor/jquery.min.js"></script>
  <script src="js/vendor/jquery.waypoints.min.js"></script>
  <script src="js/vendor/jquery.animateNumber.min.js"></script>
  <script src="js/vendor/jquery.lettering.js "></script>
  <script src="js/vendor/jquery.countdown.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
