<?php //Comentario para cambiar el archivo
try {

$pepe='';
$usuario = $_REQUEST["usuario"];
$password = $_REQUEST["password"];
$email = $_REQUEST["email"];

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "practica4");
$consulta = mysqli_query($con, "select idusuario from usuarios");

$filas = mysqli_num_rows($consulta);
echo($filas);
	
$sql= "INSERT INTO USUARIOS VALUES (".$filas.", '".$usuario."', '".$password."', '".$email."', 2)";

mysqli_query($con, $sql);

header("location:login.php");


} catch (Exception $e) {
	die();
}

?>