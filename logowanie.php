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
		</style>
	</head>
  <body>
	  <center>
	  <form action="authenticate.php" method="post">  
		  	<br><br>
		    <label for="username">Username:</label>
			<input id= "username" name="username" type="text" required> <br><br><br>
			<label for="password">Password:</label>
			<input id= "password" name="password" type="password" required> <br>
			<input id"loginButton" type="submit" value="Zaloguj">
	  </form>
	  </center>
	</body>
</html>