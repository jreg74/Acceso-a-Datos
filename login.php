<?php include 'header.php';?>

<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<h2 class="mt-5">Formulario de login</h2>
				<form action="validarLogin.php" method="post">
					<div class="form-group">
						<label for="username">Usuario</label>
						<input type="text" name="usuario" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<input type="submit" class="btn btn-primary" value="Login usuario">		
				</form>
			</div>				
		</div>
	</div>

<?php include 'footer.php';?>