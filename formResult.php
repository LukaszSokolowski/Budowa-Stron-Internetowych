<!DOCTYPE html>
<html lang="zxx">
  <head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta charset="utf-8">
    <title>Wypełniony formularz</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    
    <?php
	    $imie = $_POST['imie'];
	    $nazwisko = $_POST['nazwisko'];
	    $miejscowosc = $_POST['miejscowosc'];
	    $ulica = $_POST['ulica'];
	    $numer_mieszkania = $_POST['numer_mieszkania'];
	    $kod_pocztowy = $_POST['kod_pocztowy'];
	    $mail = $_POST['mail'];
	    $numer_telefonu = $_POST['numer_telefonu'];
	    $data_urodzenia = $_POST['data_urodzenia'];
	    $wojewodztwo = $_POST['wojewodztwo'];
	    $prawo_jazdy = $_POST['dndnslakjdnalkjdnlakjsdlakjsdhlakjshdlaskjdhla'];
	    $plec = $_POST['bdalksjdhlaskjhdlakjhsdl'];
	    $uwagi = $_POST['uwagi'];
	     
	     
	?>


  </head>
  <body>
  	  <center>
	      <a href="index.php">Powrót do strony głównej</a><br>
	      <h4>Wprowadzone dane prezentują się następująco</h4>
      </center>
      <br>

<form id="myForm">
  <div class="container">

  		<div class="row">
	  		<div class="col-lg-4"></div>
	      <div class="col-lg-4">Imię:</div>
	      <div class="col-lg-4" id="imie"><?php echo $imie; ?></div>
  		</div>
  		<br>
  		<div class="row">
	  		<div class="col-lg-4"></div>
	      <div class="col-lg-4">Nazwisko:</div>
	      <div class="col-lg-4" id="nazwisko"><?php echo $nazwisko; ?></div>
      	</div>
      	<br>
	    <div class="row">
		    <div class="col-lg-4"></div>
		   <div class="col-lg-4">Miejscowosc:</div>
		   <div class="col-lg-4" id="miejscowosc"><?php echo $miejscowosc; ?></div>
		</div>
		   <br>
		<div class="row">
			<div class="col-lg-4"></div>
		   <div class="col-lg-4">Ulica:</div>
		   <div class="col-lg-4" id="ulica"><?php echo $ulica; ?></div>
		</div>
		  <br>
		<div class="row">
			<div class="col-lg-4"></div>
		   <div class="col-lg-4">Numer mieszkania:</div>
		   <div class="col-lg-4" id="numer_mieszkania"><?php echo $numer_mieszkania; ?></div>
	 	</div>
	 	<br>

	   <div class="row">
		   <div class="col-lg-4"></div>
	      <div class="col-lg-4">Kod pocztowy:</div>
	      <div class="col-lg-4" id="kod_pocztowy"><?php echo $kod_pocztowy; ?></div>
	   </div>
	   <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
	      <div class="col-lg-4">Adres email:</div>
	      <div class="col-lg-4" id="mail"><?php echo $mail; ?></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
	      <div class="col-lg-4">Numer telefonu:</div>
	      <div class="col-lg-4" id="numer_telefonu"><?php echo $numer_telefonu; ?></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
	      <div class="col-lg-4">Data urodzenia:</div>
	      <div class="col-lg-4"><?php echo $data_urodzenia; ?></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
      <div class="col-lg-4">Województwo:</div>
      <div class="col-lg-4"><?php echo $wojewodztwo; ?></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
      <div class="col-lg-4">Posiadam prawo jazdy:</div>
      <div class="col-lg-4"><?php echo $prawo_jazdy; ?></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
      <div class="col-lg-4">Płeć:</div>
      <div class="col-lg-4"><?php echo $plec; ?></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
      <div class="col-lg-4">Uwagi:</div>
      <div class="col-lg-4"><textarea name="uwagi" cols="31" rows="7" id="uwagi" class="inputs"><?php echo $uwagi; ?></textarea></div>
	  </div>
	  <br>
	  
 </div>

</form>

</body>
</html>
