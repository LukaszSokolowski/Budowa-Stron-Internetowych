<?php
require_once('authenticate.php');
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta charset="utf-8">
    <title>Zadanie 3</title>
    <link href="bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript">

    function clearAllInput() {
      document.getElementById('uwagi').value = "";
      document.getElementById('imie').value = "";
      document.getElementById('nazwisko').value = "";
      document.getElementById('kod_pocztowy').value = "";
      document.getElementById('numer_telefonu').value = "";
      document.getElementById('numer_mieszkania').value = "";
      document.getElementById('ulica').value = "";
      document.getElementById('miejscowosc').value = "";
      document.getElementById('mail').value = "";
      document.getElementById('data_urodzenia').value = "";
    }
    </script>

  </head>
  <body>
  		<center>
      <a href="index.php">Powrót do strony głównej</a><br>
      <h4>Wypełnij poniższy formularz <br>Pola z gwiazdką (*) są wymagane</h4>
      </center>
      <br>

<form id="myForm">
  <div class="container">

  		<div class="row">
	  		<div class="col-lg-4"></div>
	      <div class="col-lg-4">Imię*: (np. Jan, Anna Maria, Lily-May)</div>
	      <div class="col-lg-4"><input type="text" name="imie" id="imie" class="inputs"></div>
  		</div>
  		<br>
  		<div class="row">
	  		<div class="col-lg-4"></div>
	      <div class="col-lg-4">Nazwisko*: (Dopuszczalne kilkuczłonowe <br> np Downey Jr. , Kowalska-Nowak )</div>
	      <div class="col-lg-4"><input type="text" name="nazwisko" id="nazwisko" class="inputs"></div>
      	</div>
      	<br>
	    <div class="row">
		    <div class="col-lg-4"></div>
		   <div class="col-lg-4">Miejscowosc*:</div>
		   <div class="col-lg-4"><input type="text" name="miejscowosc" id="miejscowosc" class="inputs"></div>
		</div>
		   <br>
		<div class="row">
			<div class="col-lg-4"></div>
		   <div class="col-lg-4">Ulica*:</div>
		   <div class="col-lg-4"><input type="text" name="ulica" id="ulica" class="inputs"></div>
		</div>
		  <br>
		<div class="row">
			<div class="col-lg-4"></div>
		   <div class="col-lg-4">Numer mieszkania*: (np 18,18A, 3/4, 3/4B)</div>
		   <div class="col-lg-4"><input type="text" name="numer_mieszkania" id="numer_mieszkania" class="inputs"></div>
	 	</div>
	 	<br>

	   <div class="row">
		   <div class="col-lg-4"></div>
	      <div class="col-lg-4">Kod pocztowy*: (xx-xxx)</div>
	      <div class="col-lg-4"><input type="text" name="kod_pocztowy" id="kod_pocztowy" class="inputs"></div>
	   </div>
	   <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
	      <div class="col-lg-4">Adres email*:</div>
	      <div class="col-lg-4"><input type="text" name="mail" id="mail" class="inputs"></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
	      <div class="col-lg-4">Numer telefonu*: (xxx-xxx-xxx)</div>
	      <div class="col-lg-4"><input type="text" name="numer_telefonu" id="numer_telefonu" class="inputs"></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
	      <div class="col-lg-4">Data urodzenia*: (dd-mm-rrrr)</div>
	      <div class="col-lg-4"><input type="text" name="data_urodzenia" id="data_urodzenia" class="inputs"></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
      <div class="col-lg-4">Wybierz województwo:</div>
      <div class="col-lg-4">
        <select name="wojewodztwa">
          <option value="none" >-----------------</option>
          <option value="dolnoslaskie">Dolnośląskie</option>
          <option value="kujawsko_pomorskie">Kujawsko-pomorskie</option>
          <option value="lubelskie">Lubelskie</option>
          <option value="Lubelskie">Lubuskie</option>
          <option value="lodzkie">Łódzkie</option>
          <option value="malopolskie">Małopolskie</option>
          <option value="mazowieckie">Mazowieckie</option>
          <option value="opolskie">Opolskie</option>
          <option value="podkarpackie">Podkarpackie</option>
          <option value="podlaskie">Podlaskie</option>
          <option value="pomorskie">Pomorskie</option>
          <option value="slaskie">Śląskie</option>
          <option value="swietokrzyskie">Świętokrzyskie</option>
          <option value="warminsko_mazurskie">Warmińsko-Mazurskie</option>
          <option value="wielkopolskie">Wielkopolskie</option>
          <option value="zachodniopomorskie">Zachodniopomorskie</option>
        </select>
      </div>
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
      <div class="col-lg-4"><textarea name="uwagi" cols="31" rows="7" id="uwagi" class="inputs">Tu wpisz swoje uwagi</textarea></div>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-4"></div>
	      <div class="col-lg-4">
		      <input type="button" value=" Zatwierdź formularz ">
	      </div>

	      <div class="col-lg-2">
		      <input type="button" value="  Wyczyść formularz " onclick="clearAllInput()">
	      </div>
      </div>

 </div>

</form>

</body>
</html>
