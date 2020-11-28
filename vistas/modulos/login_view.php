<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../logging/assets/styles.css">
</head>
<body>

	<?php require '../../logging/partials/header.php' ?>
	<h1>Iniciar sesión</h1>
	<span>o <a href="signup.php">Registro</a></span>

	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>p
	<?php endif;?>

	<form action="login.php" method="post">
		<input type="text" name="email" placeholder="Ingrese su email">
		<input type="password" name="password" placeholder="Ingrese su contraseña">
		<input type="submit" value="Enviar">
	</form>
</body>
</html>