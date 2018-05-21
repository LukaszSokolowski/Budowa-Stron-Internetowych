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
	    	background-color: #abdaea;
	    	font-size: 15px;
	    	font-family: verdana;
    	}
    	
    	.row {
	    	border: 1px solid black;
	    	padding-left: 250px;
	    	margin-bottom: 10px;
    	}
    	.name {
	    	border: 1px solid red;
	    	float: left;
	    	width: 200px;
	    	height: 30px;

    	}
    	.surname {
	    	border: 1px solid green;
	    	float: left;
	    	width: 200px;
	    	height: 30px;
    	}
    	.input {
	    	padding-left: 250px;
	    	border: 1px solid black;

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
			margin-right: 14px;
		}	
    </style>
    
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
						    
					      echo "<form action=\"updateOrDelete.php\" method=\"post\">";
						  echo "<input type=\"text\" name=\"clientName\" value=\"$imie\">";
						  echo "<input type=\"text\" name=\"clientSurname\" value=\"$nazwisko\">";
						  echo "<input type=\"submit\" name=\"update_button\" value=\"Update\">";
						  echo "<input type=\"submit\" name=\"delete_button\" value=\"Delete\">";
						  echo "<input type=\"hidden\" name=\"rowID\" value=\"$id\">";
						  
						 						  
						  
						  echo "</form>";			
						  		        
					    }
					} else {
					    echo "0 results";
					}
					$conn->close();
		?> 
		
				<form action="insert.php" method="post">
						<div class="input">
						    <input type="text" name="clientName" placeholder="Tu wpisz imię" required>
							<input type="text" name="clientSurname" placeholder="Tu wpisz nazwisko" required>
							<input type="submit" value="Dodaj rekord">
						</div>
				</form>
  		  		
	</body>
</html>
