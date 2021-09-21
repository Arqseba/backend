<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inversiones Inmobiliarias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  
  <script src="https://kit.fontawesome.com/de041f53f6.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="favicon.ico.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <!--Navbvar-->

  <?php
    include ('navbar.php');
  ?>

  <div class="embed-responsive container-fluid ml-0" id="video">
    <video  width="100%" class="embed-responsive-item" src="videos/video_recortado_2.mp4" autoplay muted loop
      allowfullscreen>
      
  </div>
  <!--Navbvar 2-->
 <?php
    include ('navbar_2.php');
  ?>

  <div id="empresa">
    <img  src="logos/logos_png/logo_solo_sombra_transp_color.png" alt="" >
    <h1>INVERSIONES INMOBILIARIAS</h1>

  </div>

  <div class="destacados">
    <div class="container">
      <h2>Destacados</h2>
    </div>

  </div>


  <div id="content" class="container ">
    <div class="row ">

      <div class="col-md-4  col-sm-6 single">
        <div class="product">
          <a href="#">
            <img src="ventas/pilares_manantiales/logo_pilares.jpg" class="rounded mx-auto d-block img-responsive" alt="">
          </a>
          <div class="text">
            <h3><a href="#">DEPARTAMENTO EN PILARES DE MANANTIALES</a>
            </h3>
            <p class="price">$ 11.000.000</p>
            <p class="buttons">
              <a href="ventas/pilares_manantiales/depa_pilares_1.html" class="btn btn-default">Ver detalles</a>


            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 single">
        <div class="product">
          <a href="ventas/lote_san_ignacio/lote_san_ignacio_1.html">
            <img src="ventas/lote_san_ignacio/san_ignacio_logo.jpg" class="rounded mx-auto d-block img-responsive" alt="">
          </a>
          <div class="text">
            <h3><a href="ventas/lote_san_ignacio/lote_san_ignacio_1.html">Lote en San Ingacio Village 362m2</a>
            </h3>
            <p class="price">USD 40.000</p>
            <p class="buttons">
              <a href="ventas/lote_san_ignacio/lote_san_ignacio_1.html" class="btn btn-default">Ver detalles</a>

            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 single">
        <div class="product">
          <a href="#">
            <img src="ventas/lote_quebradas/1.jpg" class="rounded mx-auto d-block img-responsive" alt="">
          </a>
          <div class="text">
            <h3><a href="ventas/lote_quebradas/lote_quebradas_1.html">QUEBRADAS DE MANANTIALES</a>
            </h3>
            <p class="price">$ 7.300.000</p>
            <p class="buttons">
              <a href="ventas/lote_quebradas/lote_quebradas_1.html" class="btn btn-default">Ver detalles</a>

            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 single">
        <div class="product">
          <a href="#">
            <img src="images/departamentos/1.jpg" class="rounded mx-auto d-block img-responsive" alt="">
          </a>
          <div class="text">
            <h3><a href="#">DEPARTAMENTO EN ALQUILER</a>
            </h3>
            <p class="price">$ 50.000</p>
            <p class="buttons">
              <a href="alquiler_1.html" class="btn btn-default">Ver detalles</a>

            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 single">
        <div class="product">
          <a href="#">
            <img src="images/departamentos/2.jpg" class="rounded mx-auto d-block img-responsive" alt="">
          </a>
          <div class="text">
            <h3><a href="#">DEPARTAMENTO EN NVA CBA</a>
            </h3>
            <p class="price">USD 130.000</p>
            <p class="buttons">
              <a href="ventas_1.html" class="btn btn-default">Ver detalles</a>


            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 single">
        <div class="product">
          <a href="#">
            <img src="images/departamentos/3.jpg" class="rounded mx-auto d-block img-responsive" alt="">
          </a>
          <div class="text">
            <h3><a href="#">DEPARTAMENTO EN MANANTIALES</a>
            </h3>
            <p class="price">USD 60.000</p>
            <p class="buttons">
              <a href="ventas_1.html" class="btn btn-default">Ver detalles</a>

            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <footer>
 <!--footer-->
  
  <?php
    include ('footer.php');
  ?>
  </footer>

  <a href="https://wa.me/+543516951200/?text=Hola!! quisiera recibir información sobre:" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>


</body>

</html>