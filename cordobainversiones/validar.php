<?php 
include('cn.php');


$email = $_POST['email'];
$pass = $_POST['pass'];


$consulta = "SELECT * FROM clientes WHERE email='$email' and pass='$pass'";


$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
	session_start();
 $_SESSION['email'] = $email ;
	header("location:bienvenido.php");

}else{
	echo "Error en la autenticación";
}
mysqli_free_result($resultado);
mysqli_close($conexion);







?>