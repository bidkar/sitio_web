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
  <!-- CSS External -->
  <link rel="stylesheet" href="css/styles.css">
  <!-- CSS Document -->
  <style>
  	/* Reglas y propiedades CSS */
  </style>
</head>
<body>
	<!-- CSS Inline -->
	<!--<header style="background-color: brown;">-->
  	<!--header>h1{Universidad de Occidente}+h3{Unidad Guasave}-->
	<header id="encabezado">
		<h1>Universidad de Occidente</h1>
		<h3>Unidad Guasave</h3>
	</header>
	<main id="principal">
		<form id="login-form" method="post" action="login.php">
			<?php if (isset($_GET['error'])) { ?>
			<div class="error">
				Usuario o contraseña incorrecta
			</div>
			<?php } ?>
			<div class="form-control">
				<label for="txtUsuario" class="negrita">Usuario:</label>
				<input type="text" name="txtUsuario" id="txtUsuario">
			</div>
			<div class="form-control">
				<label for="txtPasswd" class="negrita">Contraseña:</label>
				<input type="password" name="txtPasswd" id="txtPasswd">
			</div>
			<div class="form-control">
				<label for="remember" class="negrita">
					<input type="checkbox" name="remember" id="remember">
					Mantener la sesion iniciada
				</label>
			</div>
			<div class="form-control">
				<button type="submit">Iniciar sesión</button>
			</div>
			<a href="lost.html" class="text-center block">¿Olvidaste tu contraseña?</a>
		</form>
	</main>
	<footer id="pie">
		<hr>
		<p class="negrita">Todos los derechos reservados &copy; 2017</p>
	</footer>
	<script src="js/app.js"></script>
</body>
</html>