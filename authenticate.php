<?php
		if($_POST["username"] == 'user' && $_POST["password"] == 'pass') {
			session_start();
			require_once('index.php');
		}
		else {
			header('Location: logowanie.php');
		}
?>

