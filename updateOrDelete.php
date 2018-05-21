<?php
					$name = $_POST['clientName'];
					$surname = $_POST['clientSurname'];
					$id = $_POST['rowID'];
    				$servername = "localhost";
					$username = "root";
					$password = "root";
					$dbname = "Sklep";
					
					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					}
					
					
					
						if (isset($_POST['update_button'])) {
						    //update action
						} else if (isset($_POST['delete_button'])) {
						    $sql = "DELETE FROM Klienci WHERE id = $id";
						} else {
						    //no button pressed
						}
													
					if ($conn->query($sql) === FALSE) {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
					$conn->close();
					header("refresh:1;url=BazaDanych.php");
					
					

?>
