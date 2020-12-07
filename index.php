<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php require_once "scripts.php"; ?>
	<style>
		.container {
			max-width: 650px;
			padding: 80px;
		}
		.push-top {
			margin-top: auto;
			max-width: 450px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="card push-top">
			<div class="row">
				<div class="col-sm-12">
					<div class="card-header">
						Login del trabajador
					</div>
					<form action="procesos/login.php" method="post">
						<div class="card-body">
							<label for="usuario">Usuario</label>
							<input type="text" name="usuario" id="usuario" class="form-control">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" class="form-control">
							<br>
							<button class="btn btn-primary">Iniciar</button>
							<a href="registro.php" class="btn btn-success">Registrarse</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>