<!DOCTYPE html>
<html lang="zxx">
  <head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta charset="utf-8">
    <title>Zadanie 3</title>
    <link href="bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript">

    var errorsCount = 0;
    function confirmForm()
    {
      if(errorsCount==0){
        document.getElementById("myForm").submit();
      }
      else {
         errorsCount=0;
      }
    }
    function check() {
      var imieRegEx = new RegExp("^[a-zżźłóńąęśćäöüß]{2,30}([- ]?[a-zżźłóńąęćśäöüß]{1,25}){0,9}$","i");
      if (imieRegEx.test(document.getElementById('imie').value)) {
          document.getElementById('imie').style.border="";
      }
      else {
        document.getElementById('imie').style.border="3px solid red";
        errorsCount+=1;
      }

      var nazwiskoRegEx = new RegExp("^[a-zżźłóńąęśćäöüß]{2,35}([- ]?[a-zżźłóńąęćśäöüß]{1,25}[.]?){0,6}$","i");
      if (nazwiskoRegEx.test(document.getElementById('nazwisko').value)) {
          document.getElementById('nazwisko').style.border="";
      }
      else {
        document.getElementById('nazwisko').style.border="3px solid red";
        errorsCount+=1;
      }

      var miejscowoscRegEx = new RegExp("^[a-zżźłóńąęśćäöüß]{1,30}([- ]?[a-zżźłóńąęćśäöüß]{1,20}[.]?){0,8}$","i");
      if (miejscowoscRegEx.test(document.getElementById('miejscowosc').value)) {
          document.getElementById('miejscowosc').style.border="";
      }
      else {
        document.getElementById('miejscowosc').style.border="3px solid red";
        errorsCount+=1;
      }

      var ulicaRegEx = new RegExp("^[a-zżźłóńąęśćäöüß0-9]{1,30}([- ]?[a-zżźłóńąęćśäöüß0-9]{1,25}[.]?){0,10}$","i");
      if (ulicaRegEx.test(document.getElementById('ulica').value)) {
          document.getElementById('ulica').style.border="";
      }
      else {
        document.getElementById('ulica').style.border="3px solid red";
        errorsCount+=1;
      }

      var mieszkanieRegEx = new RegExp("^([1-9][0-9]{0,5}|[1-9][0-9]{0,5}[a-z]|[1-9][0-9]{0,5}[/\\][1-9][0-9]{0,5}|[1-9][0-9]{0,5}[a-z]?[/\\][1-9][0-9]{0,5}[a-z]?)$","i");
      if (mieszkanieRegEx.test(document.getElementById('numer_mieszkania').value)) {
          document.getElementById('numer_mieszkania').style.border="";
      }
      else {
        document.getElementById('numer_mieszkania').style.border="3px solid red";
        errorsCount+=1;
      }

      var kodPocztowyRegEx = new RegExp("^[0-9]{2}-[0-9]{3}$");
      if (kodPocztowyRegEx.test(document.getElementById('kod_pocztowy').value)) {
          document.getElementById('kod_pocztowy').style.border="";
      }
      else {
        document.getElementById('kod_pocztowy').style.border="3px solid red";
        errorsCount+=1;
      }

      var mailRegEx = new RegExp("^[a-z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-z0-9-]+(\.[a-z0-9-]+)*$","i");
      if (mailRegEx.test(document.getElementById('mail').value)) {
          document.getElementById('mail').style.border="";
      }
      else {
        document.getElementById('mail').style.border="3px solid red";
        errorsCount+=1;
      }

      var telefonRegEx = new RegExp("^[0-9]{3}-[0-9]{3}-[0-9]{3}$");
      if (telefonRegEx.test(document.getElementById('numer_telefonu').value)) {
          document.getElementById('numer_telefonu').style.border="";
      }
      else {
        document.getElementById('numer_telefonu').style.border="3px solid red";
        errorsCount+=1;
      }

      var dataRegEx = new RegExp("^([0][1-9]|[1-2][0-9]|[3][0-1])-([0][1-9]|[1][0-2])-([1][9][0-9][0-9]|[2][0][0][0-9]|[2][0][1][0-8])$");
      if (dataRegEx.test(document.getElementById('data_urodzenia').value)) {
          document.getElementById('data_urodzenia').style.border="";
      }
      else {
        document.getElementById('data_urodzenia').style.border="3px solid red";
        errorsCount+=1;
      }

      var uwagiRegEx = new RegExp("^.{0,450}$","i");
      if (uwagiRegEx.test(document.getElementById('uwagi').value)) {
          document.getElementById('uwagi').style.border="";
      }
      else {
        document.getElementById('uwagi').style.border="3px solid red";
        errorsCount+=1;
      }
        confirmForm();
    }

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
      <a href="index.html">Powrót do strony głównej</a><br>
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
		      <input type="button" value=" Zatwierdź formularz " onclick="check()">
	      </div>

	      <div class="col-lg-2">
		      <input type="button" value="  Wyczyść formularz " onclick="clearAllInput()">
	      </div>
      </div>

 </div>

</form>

</body>
</html>
