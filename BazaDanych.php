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
			width: 150px;
			margin-left: 65px;
			height: 30px;
			border-radius: 4px;
			
			
		}	
		input[type="text"] {
			width: 180px;
			height: 30px;
			border-radius: 4px;
			margin-left: 65px;
		}
		#submitButton {
			margin-left: 54px;
		}
    </style>
    
    
    
    <script type="text/javascript">

		function changes(idElement) {
			document.getElementById( idElement ).disabled = false;
			var str1 = idElement.toString();
			var str2 = "Surname";
			var idElementSurname = str1.concat(str2);
			document.getElementById( idElementSurname ).disabled = false;
		}
		
	</script>
	      
  </head>
 	<body>
  		<center><a href="index.php">Powrót do strony głównej</a><br></center><br>

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
						    $imie =$row['Imie'];
						    $nazwisko = $row['Nazwisko'];
						    $idSurname = $id . "Surname";
						    
					      echo "<form action=\"updateOrDelete.php\" method=\"post\">";
						  echo "<input type=\"text\" id=\"$id\" name=\"clientName\" value=\"$imie\" disabled=\"disabled\">";
						  echo "<input type=\"text\" id=\"$idSurname\" name=\"clientSurname\" value=\"$nazwisko\" disabled=\"disabled\">";
						  echo "<input type=\"button\" name=\"edit_button\" id=\"$id\" value=\"Edit\" onclick=\"changes($id)\">";
						  echo "<input type=\"submit\" name=\"update_button\" value=\"Update\" id=\"$id\">";
						  echo "<input type=\"submit\" name=\"delete_button\" value=\"Delete\" id=\"$id\">";
						  echo "<input type=\"hidden\" name=\"rowID\" value=\"$id\">";
						  
						  echo "</form>";			
						  
						  echo "$id";
						  		        
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
  		  		
	</body>
</html>
