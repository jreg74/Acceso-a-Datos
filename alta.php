<?php  include 'header.php';?>

<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<h2 class="mt-5">Registro de usuario</h2>
				<form action="altaUsuario.php" method="post" id ="altausuario">
					<div class="form-group">
						<label for="username">Usuario</label>
						<input type="text" name="usuario" id="usuario" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="password2">Repetir password</label>
						<input type="password" name="password2"  id="password2" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Email</label>
						<input type="email" name="email" id="email" class="form-control">
					</div>
					<input type="submit" class="btn btn-primary" value="Alta usuario">		
				</form>
			</div>				
		</div>
	</div>
<?php include 'footer.php';?>

