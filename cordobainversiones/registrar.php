<?php 
include('cn.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$pass = $_POST['pass'];


$telefono = $_POST['telefono'];

if($pass != $pass_r){
   echo "Las Constraseñas no coinciden";
   mysqli_close($conexion);
   header('refresh:2;url=clientes.php');
   
}

$insertar = "INSERT INTO clientes(nombre,apellido,dni,email,pass,telefono) values ('$nombre','$apellido','$dni','$email','$pass','$telefono')";

$resultado = mysqli_query($conexion,$insertar);

 if(!$resultado){
 	echo 'Error al registrarse';
 }else{
 	echo 'Registro OK';
    header("location:login.php");
 }

 mysqli_close($conexion);
?>