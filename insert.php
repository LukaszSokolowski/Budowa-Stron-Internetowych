<?php
					$name = $_POST['clientName'];
					$surname = $_POST['clientSurname'];
    				$servername = "localhost";
					$username = "root";
					$password = "root";
					$dbname = "Sklep";
					
					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					}
					
					$sql = "INSERT INTO Klienci (Imie, Nazwisko) values ('$name','$surname')";
					
					
					
					
					
					$conn->close();

?>
