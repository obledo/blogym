

<?php

	require_once "../controladores/controlador.php";
	require_once "../modelos/modelo.php";

	session_start();

	if(isset($_SESSION['user_id'])){
		
			$mvc = new MvcController();
			$mvc -> plantilla();
		
		//header('Location: ../vistas/modulos/inicio.php');
	}

	require 'database.php';


	if(!empty($_POST['email']) && !empty($_POST['password'])){
		$records = $conn->prepare('SELECT id_usuario, email, password FROM users WHERE email=:email');
		$records->bindParam(':email', $_POST['email']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$message = '';

	
		if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
			$_SESSION['user_id'] = $results['id_usuario'];
			 
			//header('Location: ../vistas/modulos/inicio.php');
			
			
			$mvc = new MvcController();
			$mvc -> plantilla();
			
		}	else{
			$message = 'Tus credenciales no coinciden';

		}

	}		
?>

