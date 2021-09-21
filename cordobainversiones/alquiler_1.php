<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquiler</title>
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
     <!--Navbvars-->

  <?php
    include ('navbar.php');
    include ('navbar_2.php');
  ?>


    <div id="content" class="container ">
        <div class="row">

            <div class="col-md-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="images/casas/1.jpg" class="rounded mx-auto d-block img-responsive" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="p_vent_1.php">CASA EN CERRO DE LAS ROSAS</a>
                        </h3>
                        <p>Hermosa casa en el Cerro de Las Rosas, consta de 3 dormitorios, 2 baños, estar, comedor,
                            garage para 2 vehículos y patio.</p>
                        <p class="price">$ 55.000</p>
                        <p class="buttons">
                            <a href="contacto.html" class="btn btn-default">CONTACTANOS</a>


                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 single">
                <div class="product">
                    <a href="p_vent_2.php">
                        <img src="images/casas/2.jpg" class="rounded mx-auto d-block img-responsive" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">CASA 3 DORMITORIOS EN VILLA CARLOS PAZ</a>
                        </h3>
                        <p>Hermosa casa en el Cerro de Las Rosas, consta de 3 dormitorios, 2 baños, estar, comedor,
                            garage para 2 vehículos y patio.</p>
                        <p class="price">$ 70.000</p>
                        <p class="buttons">
                            <a href="contacto.html" class="btn btn-default">CONTACTANOS</a>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 single">
                <div class="product">
                    <a href="p_vent_3.php">
                        <img src="images/casas/3.jpg" class="rounded mx-auto d-block img-responsive" alt="">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">CASA EN LAGO LOS MOLINOS</a></h3>
                        <p>Hermosa casa en el Cerro de Las Rosas, consta de 3 dormitorios, 2 baños, estar, comedor,
                            garage para 2 vehículos y patio.</p>
                        <p class="price">$ 100.000</p>
                        <p class="buttons">
                            <a href="contacto.html" class="btn btn-default">CONTACTANOS</a>

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