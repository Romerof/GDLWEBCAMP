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
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!-- site-header -->
  <?php  include_once("includes/templates/header.php")?>
  <!-- site-header -->

  <section class="seccion contenedor">
    <h2>Calendario</h2>

    <?php
      include_once('includes/funciones/DBConnection.php');
      $query = "SELECT `id_evento`,"
                      ." `nombre_evento`,"
                      ." `fecha_evento`,"
                      ." `hora_evento`,"
                      ." `cat_evento`,"
                      ." `icono`,"
                      ." `nombre_invitado`,"
                      ." `apellido_invitado`"
      ." FROM  `eventos`"
      ." INNER JOIN `categoria_evento` ON `id_cat_evento`=`id_categoria`"
      ." INNER JOIN `invitados` ON `id_inv`=`id_invitado`"
      ." ORDER BY `id_cat_evento`";
      
      try{
        $st = $conn->query($query);
      }catch(PDOException $e){
        echo 'Hay un problema en la pagina' . $e->getmessage();
        exit();
      }

      $calendar;

      while($datos = $st->fetch(pdo::FETCH_ASSOC)){
        
      
        $event = array(
          'titulo' => $datos['nombre_evento'],
          'fecha' => $datos['fecha_evento'],
          'hora' => $datos['hora_evento'],
          'categoria' => $datos['cat_evento'],
          'icono' => $datos['icono'],
          'invitado' => $datos['nombre_invitado']." ".$datos['apellido_invitado']
        );

        $calendar[$datos['fecha_evento']][]=$event;

      }

      ?>

<div class="calendario">
  
  <?php foreach($calendar as $dia => $event): ?>
    <div class='dia'>

    
      <h3>
        <i class='far fa-calendar-alt'></i>
        
        <?php  
              setlocale(LC_TIME, 'spanish.UTF8');
              echo strftime("%A, %d de %B del %Y", strtotime($dia));
        ?>
            
      </h3>

      <?php foreach($event as $e): ?>
          <div class="evento">
            <h4 class="titulo"><?php echo $e['titulo']?></h4>
            <p class="hora"><i class='far fa-clock'></i> <?php echo $e['hora']?></p>
            <p class="titulo"><i class='fa <?php echo $e['icono']?>'></i> <?php echo $e['categoria']?></p>
            <p class="titulo"><i class='fas fa-user'></i> <?php echo $e['invitado']?></p>
          </div> <!--evento-->
      <?php endforeach;?>
    </div> <!--dia-->
  <?php endforeach;?>

      
      <pre>
        <?php 
          echo strftime("%A, %d de %B del %Y", strtotime($dia));
          var_dump($calendar);
        ?>

      </pre>

    </div>
  </section>



  <!-- site-footer  -->
  <?php include_once("includes/templates/footer.php") ?>
  <!-- site-footer  -->

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/vendor/jquery.min.js"></script>
  <script src="js/vendor/jquery.animateNumber.min.js"></script>
  <script src="js/vendor/jquery.lettering.js "></script>
  <script src="js/vendor/jquery.countdown.min.js"></script>
  <script src="js/vendor/lightbox.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>