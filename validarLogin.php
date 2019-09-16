<?php 

try {
	$usuario = $_REQUEST["usuario"];
	$password = $_REQUEST["password"];
	$consulta = "SELECT idusuario , password FROM usuarios WHERE usuario LIKE '".$usuario."'";
	$connection = mysqli_connect("localhost", "root", "");
	mysqli_select_db($connection, "practica4");
	$query = mysqli_query($connection,$consulta); 
	$numeroLineas = mysqli_num_rows($query);
	if($numeroLineas==0)
		header('location:fracaso.php');
	
	for($i=0; $i <$numeroLineas; $i++){
		$rejilla = mysqli_fetch_array($query);
		if($password==$rejilla['password']){
			$consultaInsertar ="INSERT INTO loginusuarios (idusuario_fk, fecha) VALUES (". $rejilla['idusuario'] .", now())";
			mysqli_query($connection,$consultaInsertar); 
			header('location:app.php');
			return;
		}
	}
	header('location:fracaso.php');
	mysqli_close($connection);
} catch (Exception $e) {
	die();
}
?>