<?php include 'header.php'; ?>
<?php
try {
	$conexion = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conexion, "practica4");
	$query = mysqli_query($conexion, "SELECT usuario, idlogin, fecha FROM usuarios  INNER JOIN loginusuarios  ON usuarios.idusuario = loginusuarios.idusuario_fk");
	$numFilas = mysqli_num_rows($query);
?>	
<div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Log de usuarios</h1>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">USUARIO</th>
			      <th scope="col">IDLOGINK</th>
			      <th scope="col">FECHA</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  		for($i =0; $i< $numFilas; $i++){
						$registro =mysqli_fetch_array($query);
			  	?>
			    <tr>
			      <th scope="row"><?php echo($registro['usuario']);  ?></th>
			      <td><?php echo ($registro['idlogin']);  ?></td>
			      <td><?php echo($registro['fecha']);  ?></td>
			    </tr>
				<?php } ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<?php
	} catch (Exception $e) {
	die();
}
mysqli_close($conexion);
?>

<?php include 'footer.php'; ?>