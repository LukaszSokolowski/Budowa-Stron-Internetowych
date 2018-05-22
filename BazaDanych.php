<!DOCTYPE html>
<html lang="zxx">
  <head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta charset="utf-8">
    <title>Zadanie 3</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    
    <style type="text/css">
    	
    	body {
	    	background-color: #dbebf0;
	    	font-size: 15px;
	    	font-family: verdana;
    	}
    	
       	input[type="submit"] {
			width: 100px;
			margin-left: 15px;
			height: 20px;
			border-radius: 10px;
			font-size: 10px;
		}	
		
		input[type="text"] {
			width: 200px;
			height: 30px;
			border-radius: 1px;
			margin-left: 35px;
			margin-bottom: 5px;
		}
		
		input[type="button"] {
			width: 100px;
			margin-left: 35px;
			height: 20px;
			border-radius: 10px;
			font-size: 10px;

		}	
		
		#submitButton {
			margin-left: 54px;
		}
		
		
    </style>
    
    <script type="text/javascript">

		function changeInputWhenUserWantToEdit(idElement) {
			if (document.getElementById( idElement ).disabled) {
				document.getElementById( idElement ).disabled = false;
			} else {
				document.getElementById( idElement ).disabled = true;
			}
				var str1 = idElement.toString();
				var str2 = "Surname";
				var idElementSurname = str1.concat(str2);
				
			if (document.getElementById( idElementSurname ).disabled) {
				document.getElementById( idElementSurname ).disabled = false;
			} else {
				document.getElementById( idElementSurname ).disabled = true;
			}
		}
		
		function changeForAcceptValues(idElement) {
				document.getElementById( idElement ).disabled = false;
				var str1 = idElement.toString();
				var str2 = "Surname";
				var idElementSurname = str1.concat(str2);
				document.getElementById( idElementSurname ).disabled = false;

		}
								
	</script>
	      
  </head>
 	<body>
  		<center><a href="index.php">Powrót do strony głównej</a><br><br>

  		<?php
					$servername = "localhost";
					$username = "root";
					$password = "root";
					$dbname = "Sklep";
					
					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					}
					
					$sql = "SELECT id,Imie,Nazwisko FROM Klienci";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
					    while($row = $result->fetch_assoc()) {
						    
						    $id =$row['id'];
						    $name =$row['Imie'];
						    $surname = $row['Nazwisko'];
						    $idSurname = $id . "Surname";
						    
					      echo "<form action=\"updateOrDelete.php\" method=\"post\">";
					      
						  echo "<input type=\"text\" id=\"$id\" name=\"clientName\" value=\"$name\" disabled=\"disabled\">";
						  echo "<input type=\"text\" id=\"$idSurname\" name=\"clientSurname\" value=\"$surname\" disabled=\"disabled\">";
						  echo "<input type=\"button\" name=\"edit_button\" value=\"Edytuj rekord\" onclick=\"changeInputWhenUserWantToEdit($id)\">";
						  echo "<input type=\"submit\" name=\"update_button\" value=\"Akceptuj edycje\" onclick=\"changeForAcceptValues($id)\">";
						  echo "<input type=\"submit\" name=\"delete_button\" value=\"Usuń rekord\">";
						  echo "<input type=\"hidden\" name=\"rowID\" value=\"$id\">";
						  
						  echo "</form>";			
						  		        
					    }
					} else {
					    echo "0 results";
					}
					$conn->close();
		?> 
				<br><br>
				<p style="padding-left: 65px;">Dodaj nowy rekord wpisując wartości w poniższe pola</p>
				<form action="insert.php" method="post">
						<div class="input">
						    <input type="text" name="clientName" placeholder="Tu wpisz imię" required>
							<input type="text" name="clientSurname" placeholder="Tu wpisz nazwisko" required>
							<input type="submit" value="Dodaj rekord" id="submitButton">
						</div>
				</form>
  		  		</center>
	</body>
</html>
