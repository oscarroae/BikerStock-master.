<!doctype html>
<html>
	<head>
		<title>Sistema de notas</title>
	</head>
	<body>
		<h1>Estudiantes</h1>
		<a href="add.php" target="_blank">Registrar Estudiante</a><br><br>
		<table border="1"> 
			<tr>
				<th>id</th>
				<th>nombre</th>
				<th>apellido</th>
				<th>documento</th>
				<th>correo</th>
				<th>materia</th>
				<th>docente</th>
				<th>promedio</th>
				<th>Fecha de Registro</th>
				<th>Acciones</th>
			</tr>
			<tr> 
				<td>1</td>
				<td>Diego</td>
				<td>Palacios</td>
				<td>45668779</td>
				<td>diego33@zumpango.net</td>
				<td>Español</td>
				<td>Felicia</td>
				<td>55%</td>
				<td>27/06/22</td>
				<td>
					<a href="edit.php" target="_blank">Editar</a>
					<a href="delete.php" target="_blank">Eliminar</a>
				</td>				
			</tr>
		</table>
	</body>
</html>