<?php
    session_start();							//zaczyna sesje
    unset($_SESSION['authenticated']);			//niszczy zmienna 
    session_destroy();							//niszczy sesje
    header("Location: index.php");				//przejdziemy pod indeks.php skąd przekieruje nas na logowanie
?>
