<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8">
	<title>Bienvenido a Blogym</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="logging/assets/styles.css" type="text/css">
</head>



<body>

<?php require 'partials/header.php' ?>

<?php if(!empty($user)): ?>
	<br> Bienvenido. <? = $user['email'] ?>
	<br> Ingreso exitoso

	<a href="logging/logout.php">Logout</a>

<?php else: ?>

	<h1>Ingrese sesión o Registrese</h1>

	<a href="logging/login.php">Iniciar sesión</a> or
	<a href="logging/signup.php">Registro</a> 
<?php endif; ?>

</body>

</html>