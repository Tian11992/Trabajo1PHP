<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tarea</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		
		<label for="numero"><i><b>Punto 1:</b></i></label>
		<input type="number" name="numero" placeholder="Digite un número" required="required" id="numero">

		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>