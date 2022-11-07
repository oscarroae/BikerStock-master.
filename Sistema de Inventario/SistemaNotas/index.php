<!doctype html>
<html>
	<head>
		<title>Sistema de notas</title>
	</head>
	<body>
		<h1>Inicio de sesión</h1>
		<form action="Usuarios/Controlador_usu/login.php" method="POST" accept-charset="utf-8">
		Usuario <br>
		<input type="text" name="usuario" required="" autocomplete="off" placeholder="Usuario"> <br><br>
		Contraseña<br>
		<input type="text" name="contraseña" required="" autocomplete="off" placeholder="contraseña"> 
		<br><br><br>
		<input type="submit" name="Inicio Sesión">
		</form>
	</body>
</html>
