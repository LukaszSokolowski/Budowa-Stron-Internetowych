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
					
					$sql = "INSERT INTO Klienci (Imie, Nazwisko) VALUES ('$name','$surname')";
								
					if ($conn->query($sql) === FALSE) {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
					$conn->close();
					header("refresh:1; url=BazaDanych.php");
					
					

?>
