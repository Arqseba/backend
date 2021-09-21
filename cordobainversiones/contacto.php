<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
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


  <div class="embed-responsive">
  <img src="images/contac_1_1355_683_2.jpg" class="d-block w-100" height="512" alt="">    

  </div>
   <!--Navbvar 2-->
 <?php
    include ('navbar_2.php');
  ?>

  <div id="empresa">
    <img width="200" src="logos/logos_png/logo_solo_sombra_transp_color.png" alt="">
    <h1>INVERSIONES INMOBILIARIAS</h1>

  </div>

  <div class="destacados">
    <div class="container">
      <h2>CONTACTO</h2>
    </div>

  </div>
<div class="container">
    <form class="contacto" method="POST" action="https://usebasin.com/f/6f022092b5a0">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Teléfono</label>
            <input type="number" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mensaje</label>
            <textarea class="form-control" name="consulta" aria-label="With textarea" name="textarea"></textarea>
          </div>
        
       
        <button type="submit" class="btn btn-outline-light" >Enviar</button>
      </form>



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