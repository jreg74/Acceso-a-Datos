<?php include 'header.php'?>

<?php

$usuario = $_REQUEST["usuario"];
$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion, "practica4");
$consulta = "SELECT * FROM USUARIOS WHERE USUARIO = '". $usuario ."'";
$resultado = mysqli_query($conexion, $consulta);
$numFilas = mysqli_num_rows($resultado);

if($numFilas == 0){
	header('location: auditoriError.php');
}else{
	$rejilla = mysqli_fetch_array($resultado);
	echo($rejilla['idusuario']);
	$idusuario = $rejilla['idusuario'];
	$consulta1 = "SELECT fecha FROM LOGINUSUARIOS WHERE idusuario_fk like '". $idusuario ."'";
	$resultado1 = mysqli_query($conexion, $consulta1);
	$numFilas1 = mysqli_num_rows($resultado1);

	
}
mysqli_close($conexion);
?>
<div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Log de usuarios</h1>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">FECHA</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  		for($i =0; $i<$numFilas1; $i++){
					$rejilla1 = mysqli_fetch_array($resultado1);
		  	?>
			    <tr>
			      <td><?php echo($rejilla1['fecha']);  ?></td>
			    </tr>
				<?php } ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>


<?php include 'footer.php'?>