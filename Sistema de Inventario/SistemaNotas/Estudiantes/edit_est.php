<!doctype html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Sistema de Notas</title>
		</head>
		<body>
			<h1>Editar Estudiante</h1>
			<form method="POST" action="../Controlador/edit.php">
			<input type="hidden" name="id" value="">
		Nombre <br>
			<input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"><br><br>
		Apellido <br>
			<input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"><br><br>
		Documento <br>
			<input type="text" name="Documento" required="" autocomplete="off" placeholder="Documento"><br><br>
		Correo <br>
			<input type="text" name="email" required="" autocomplete="off" placeholder="Correo" size="40"><br><br>
		Materia <br>
			<select name="Materia" required="">
				<option>Seleccione</option>
				<option value="Español">Espanol</option>
				<option value="Ciencias">Ciencias</option>
				<option value="Ingles">Ingles</option>
			</select><br><br>
			<select name="Docente" required="">
				<option>Seleccione</option>
				<option>Maria Lopez</option>
				<option>Alejandro Bonilla</option>
				<option>Juan Quintero</option>
			</select><br><br>
		Promedio <br>
			<input type="number" name="promedio" required="" autocomplete="off" placeholder="Promedio"><br><br>
		<input type="submit" value="Editar Estudiante">
			</form>
		</body>		
	</html>