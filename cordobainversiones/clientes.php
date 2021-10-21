<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
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
  <img src="images/nosotros.jpg" class="d-block w-100" height="512" alt="">    

  </div>
   <!--Navbvar 2-->
 <div>
 	<br>
 </div>

  <div id="empresa">
    <img width="200" src="logos/logos_png/logo_solo_sombra_transp_color.png" alt="">
    <h1>INVERSIONES INMOBILIARIAS</h1>

  </div>

  <div class="destacados">
    <div class="container">
      <h2>REGISTRATE</h2>
    </div>

  </div>
  <center>
  <div class="col-md-9"><!--col-md-9 start-->
      <div class="box"><!--box start-->
        <div class="box-header"><!--box-header start-->
        
        </div><!--box-header end-->
  
<form action="registrar.php" method="post" >
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" required="" class="form-control">
            
          </div>
          <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="apellido" required="" class="form-control">
            
          </div>
          <div class="form-group">
            <label>DNI</label>
            <input type="text" name="dni" required="" class="form-control">
            
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required="" class="form-control">
            
          </div>
          <div class="form-group">
            <label>Contraseña</label>
            <input type="password" name="pass" required="" class="form-control">
            
          </div>
          <div class="form-group">
            <label>Reingresa la contraseña</label>
            <input type="password" name="pass_r" required="" class="form-control">
            
          </div>
           <div class="form-group">
            <label>Telefono</label>
            <input type="text" name="telefono" required="" class="form-control">
            
          </div>
       
       

          <br>
          <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary">
              <i class="fas fa-user-md"></i>Registrarse
            </button>
            
          </div>
          <br>
          <p>¿Ya estás registrado? <a href="login.php">Ingresa aqui!!</a> </p>
        </form>
      </div><!--box end-->
      
     </div><!--col-md-9 end-->
</center>


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