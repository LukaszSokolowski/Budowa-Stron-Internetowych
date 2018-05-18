<!DOCTYPE html>
<html lang="zxx">
  <head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta charset="utf-8">
    <title>Wypełniony formularz</title>
    <link href="bootstrap.min.css" rel="stylesheet">

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
	      <div class="col-lg-4"><input type="text" name="imie" id="imie" class="inputs"></div>
  		</div>
  		<br>
  		<div class="row">
	  		<div class="col-lg-4"></div>
	      <div class="col-lg-4">Nazwisko:</div>
	      <div class="col-lg-4"><input type="text" name="nazwisko" id="nazwisko" class="inputs"></div>
      	</div>
      	<br>
	    <div class="row">
		    <div class="col-lg-4"></div>
		   <div class="col-lg-4">Miejscowosc:</div>
		   <div class="col-lg-4"><input type="text" name="miejscowosc" id="miejscowosc" class="inputs"></div>
		</div>
		   <br>
		<div class="row">
			<div class="col-lg-4"></div>
		   <div class="col-lg-4">Ulica:</div>
		   <div class="col-lg-4"><input type="text" name="ulica" id="ulica" class="inputs"></div>
		</div>
		  <br>
		<div class="row">
			<div class="col-lg-4"></div>
		   <div class="col-lg-4">Numer mieszkania:</div>
		   <div class="col-lg-4"><input type="text" name="numer_mieszkania" id="numer_mieszkania" class="inputs"></div>
	 	</div>
	 	<br>

	   <div class="row">
		   <div class="col-lg-4"></div>
	      <div class="col-lg-4">Kod pocztowy:</div>
	      <div class="col-lg-4"><input type="text" name="kod_pocztowy" id="kod_pocztowy" class="inputs"></div>
	   </div>
	   <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
	      <div class="col-lg-4">Adres email:</div>
	      <div class="col-lg-4"><input type="text" name="mail" id="mail" class="inputs"></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
	      <div class="col-lg-4">Numer telefonu:</div>
	      <div class="col-lg-4"><input type="text" name="numer_telefonu" id="numer_telefonu" class="inputs"></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
	      <div class="col-lg-4">Data urodzenia:</div>
	      <div class="col-lg-4"><input type="text" name="data_urodzenia" id="data_urodzenia" class="inputs"></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
      <div class="col-lg-4">Województwo:</div>
      <div class="col-lg-4"> </div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
      <div class="col-lg-4">Posiadam prawo jazdy:</div>
      <div class="col-lg-4"><input type="radio" name="p_jazdy" value="tak"> Tak <input type="radio" name="p_jazdy" value="tak"> Nie </div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
      <div class="col-lg-4">Płeć:</div>
      <div class="col-lg-4"><input type="radio" name="plec" value="kobieta">&nbsp;Kobieta &nbsp;<input type="radio" name="plec" value="mezczyzna">&nbsp;Mężczyzna </div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
      <div class="col-lg-4">Uwagi:</div>
      <div class="col-lg-4"><textarea name="uwagi" cols="31" rows="7" id="uwagi" class="inputs"></textarea></div>
	  </div>
	  <br>
	  
 </div>

</form>

</body>
</html>
