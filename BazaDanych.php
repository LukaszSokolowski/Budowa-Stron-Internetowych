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
					
					$sql = "SELECT * FROM Klienci";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
					    while($row = $result->fetch_assoc()) {
					        
					        
					      echo "<div class=\"row\">";
						  echo "<div class=\"name\">" . $row['Imie'] . "</div>";
						  echo "<div class=\"surname\">" . $row['Nazwisko'] .  "</div>";
						  echo "</div>";					        
					        
					    }
					} else {
					    echo "0 results";
					}
					$conn->close();
		?> 
  		  		
	</body>
</html>