<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //mozna wyslac metode post bez zadnej danej wiec mozna sprawdzic

	if(!empty($_POST["username"]) && !empty($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		if($username == 'user' && $password == 'password') {
			session_start();
			$_SESSION["authenticated"] = 'true';	//globalna zmienna do przetrzymywania informacji o sesji
			header('Location: index.php');			//Powiodlo sie zalogowanie
		}
		else {
			header('Location: login.php');			//wykona sie gdy bledny login
		}

	} else {
		header('Location: login.php');				//pusty login co raczej nie jest mozliwe ale warto
	}
} else {											//jesli nie metoda post to logowanie 
?>
<!DOCTYPE html>

<html lang="zxx">
    <head>
	    <meta charset="utf-8">
	    <title>Logowanie</title>
	    <style>
		    body {
			    background-color: #e7fcff;
			    font-family: Verdana;
			    font-size: large;
		    }
		      input[type=text] {
			  width: 250px;
			  height: 25px;
			  border-radius: 4px;
			  border-style: ridge;
			  box-shadow: 1px 2px 1px #94bbfa;
			  font-family: Verdana;
			  font-size: large;
			}
			 input[type=password] {
			  width: 250px;
			  height: 25px;
			  border-style: ridge;
			  border-radius: 4px;
			  box-shadow: 1px 2px 1px #94bbfa;
			  font-family: Verdana;
			  font-size: large;
			}
			input[type=submit] {
				margin-top: 40px;
				margin-left: 100px;
				width: 255px;
				height: 30px;
				border-radius: 4px;
				border-width: 3px;
				font-style: normal;
				font-size: 15px;
			}
			input[type=submit]:hover {
				background-color: #94ced7;
			}

		</style>
	</head>
  <body>
	  <center>
	  <form id="login" method="post">  
		  	<br><br>
		    <label for="username">Username:</label>
			<input id= "username" name="username" type="text" required> <br><br><br>
			<label for="password">Password:</label>
			<input id= "password" name="password" type="password" required> <br>
			<input id="loginButton" type="submit" value="Zaloguj">
	  </form>
	  </center>
	</body>
</html>
<?php } ?>
