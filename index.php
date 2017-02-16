<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location:perfil.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="generator" content="Visual Studio Code">
  <meta name="keywords" content="udo,universidad,sistemas,computacion">
  <meta name="description" content="Sitio web de la udeo de sistemas computacionales">
  <meta name="author" content="Bidkar Aragon Cardenas">
  <title>Titulo</title>
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header id="encabezado" class="section">
		<h1>Universidad de Occidente</h1>
		<h3>Unidad Guasave</h3>
	</header>
	<main id="principal" class="section">
		<div class="container">
			<div class="row">
				<div class="col s12 m4 offset-m4">
					<div class="card-panel">
						<form id="login-form" method="post" action="login.php">
							<?php if (isset($_GET['error'])) { ?>
							<div class="error">
								Usuario o contraseña incorrecta
							</div>
							<?php } ?>
							<div class="input-field">
								<input type="text" name="txtUsuario" id="txtUsuario">
								<label for="txtUsuario" class="negrita">Usuario:</label>
							</div>
							<div class="input-field">
								<input type="password" name="txtPasswd" id="txtPasswd">
								<label for="txtPasswd" class="negrita">Contraseña:</label>
							</div>
							<div>
								<input type="checkbox" name="remember" id="remember" class="filled-in">
								<label for="remember">Mantener la sesion iniciada</label>
							</div>
							<div>
								<button type="submit" class="btn btn-block waves-effect waves-light">Iniciar sesión</button>
							</div>
							<a href="lost.html" class="text-center block">¿Olvidaste tu contraseña?</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="divider"></div>
	<footer id="pie" class="page-footer">
		<div class="container">
			<p class="negrita center-align">Todos los derechos reservados &copy; 2017</p>
		</div>
	</footer>
	<script src="js/jquery-3.1.1.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/app.js"></script>
</body>
</html>