<?php 
	require_once("funcs.php"); // Cargamos funciones FACILITIES
	load("auth-config"); // Se carga el nombre de usuario y contrasena definidos
	session_start(); // Se inician variables de sesion
?>

<!DOCTYPE html>
<html lang="en">
	<?php renderinc("head"); ?>
	<body>
		<div class="outer-wrapper">
			<?php render("header"); ?>
			<?php render("home"); ?>
		</div> <!--End of outer-wrapper which opens in header.php -->
		<?php render("footer"); ?>
	</body>
</html>