<?php
	require 'database.php';

	$message=' ';

	if(!empty($_POST['email']) && !empty($_POST['password'])){
		$sql = "INSERT INTO users (email,password) VALUES (:email,:password)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':email',$_POST['email']);
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$stmt->bindParam(':password',$password);

		if($stmt->execute()){
			$message='Usuario creado exitosamente';
		} else { $message = 'Hubo un error creando su contraseña';
		}

	}
?>

