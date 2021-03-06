<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ventas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/styles.css">
 
  <script src="https://kit.fontawesome.com/de041f53f6.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="favicon.ico.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <?php
    include ('../../navbar.php');
    include ('../../navbar_2.php');
  ?>

  <div class="container"> <!--inicio carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="slide_images/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="slide_images/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="slide_images/1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div><!--final carousel-->
 
  <div id="content" class="container ">
    <div class="row mt-4 ">
      
      <div class="col-md-7 col-sm-6 single p-3">
        <div class="product">
          
          <div class="text" >
            <h2><a href="#">LOTE EN QUEBRADAS DE MANANTIALES DE 364 M2</a>
            </h2>
            <p>Quebradas de Manantiales cuenta con lotes de 250 m2, aptos d??plex, vigilancia 24 hs, todo rodeado de la naturaleza y el aire puro que caracteriza a Manantiales. Ideal para comenzar y disfrutar una vida en familia.</p>
            
            <p class="price">$7.300.000</p>
            <p class="buttons">
              <a href="../../contacto.html" class="btn btn-default">Contactar a un asesor</a>
              

            </p>
          </div>
        </div>
      </div>
     
      <div class="col-md-5 col-sm-6 single p-3">
        <div class="product">
                    <div class="text">
            <h3><a href="details.php">Ubicaci??n</a>
            </h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1701.481438856349!2d-64.27730849104458!3d-31.470207332494326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDI4JzEyLjgiUyA2NMKwMTYnMzUuNCJX!5e0!3m2!1ses-419!2sar!4v1625584105165!5m2!1ses-419!2sar" width="420" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>          </div>
        </div>
      </div>
      
  
      
</div>
</div>


<footer>
 <?php
    include ('../footer2.php');
  ?>

</footer>
<a href="https://wa.me/+543516951200/?text=Hola!! quisiera recibir informaci??n sobre:" class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
</a>





      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>


</body>

</html>