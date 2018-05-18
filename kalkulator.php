<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kalkulator w JS</title>
        <script src="jquery-3.2.1.min.js"></script>
        <script type="text/javascript">

        var currentOperation = "";

          function getResult(){
             var operation = document.calc.inputLabel.value ;
             if (operation == "") {
               document.getElementById('inputLabel').value = 0;
             }
             else if (operation.charAt(0)=="/" || operation.charAt(0)=="+" || operation.charAt(0)=="*" || operation.charAt(0)==".") {
                document.getElementById('info').innerHTML = "Błędna formuła! Wyczyść i wprowadź jeszcze raz.";
             }
             else if(isFinite(eval(operation))){
               var result = eval(operation);
               document.getElementById('inputLabel').value = result;
               currentOperation = result.toString();
             }
             else {
               document.getElementById('info').innerHTML = "Błędna formuła! Wyczyść i wprowadź jeszcze raz.";
               currentOperation = "";
             }
          }

          function prepareOperation(buttonValue){
            buttonValue = buttonValue.toString();
            currentOperation = currentOperation + buttonValue;
            document.getElementById('inputLabel').value = currentOperation;
          }

          function clearInputLabel() {
            currentOperation = "";
            document.getElementById('inputLabel').value = "";
            document.getElementById('info').innerHTML = "";
          }

        </script>

        <script>
	        $(document).ready(function(){

		        $("#Showbutton").click(function(){


					if($("#container").is(':hidden'))
					{
						$("#container").animate({ width: 'show', opacity: 1});
      				}
	  				else
	  				{
		  				$("#container").animate({ width: 'hide', opacity: 0.25 });
      				}
				});

			   $(':button').hover(function() {

			   		$(this).animate({ fontSize : '12px',},600);
				}
				,
								   function() {
					$(this).animate({ fontSize : '20px',},600);

				}

				);

			});


	    </script>


        <style>

        body {
            background-color: lightblue;
        }

        input[type=text] {
          width: 40%;
          padding: 4px;
          margin: 8px 0;
          font-style: normal;
          font-size: 30px;
          text-align: right;
          border: 2px solid #000000;
          border-radius: 8px;
        }

        input[type=button] {
          width: 10%;
          padding: 8px;
          margin: 8px 0;
          font-style: italic;
          font-size: 20px;
          border: 2px solid #000000;
          border-radius: 8px;
          background-color: #f4e044;
        }

        </style>

    </head>

    <body>
      <br/>
      <br/>
      <center>
        <button id="Showbutton">Naciśnij, aby wysunąć lub schować kalkulator</button>
        <h1 style="font-family:verdana;">Kalkulator</h1>
      </center>
        <div id="container" style="display:none;">
        <form action="" name="calc">

            <div>
                <input type="text" id="inputLabel" readonly="readonly">
            </div>

            <div>
                <div>
                    <input type="button"  value="1" id="num1"  onClick="prepareOperation(this.value)">
                    <input type="button"  value="2" id="num2"  onClick="prepareOperation(this.value)">
                    <input type="button"  value="3" id="num3"  onClick="prepareOperation(this.value)">
                    <input type="button"  value="+" id="plus"  onClick="prepareOperation(this.value)">
                </div>

                <div>
                    <input type="button"  value="4" id="num4"  onClick="prepareOperation(this.value)">
                    <input type="button"  value="5" id="num5"  onClick="prepareOperation(this.value)">
                    <input type="button"  value="6" id="num6"  onClick="prepareOperation(this.value)">
                    <input type="button"  value="-" id="minus" onClick="prepareOperation(this.value)">
                </div>

                <div>
                    <input type="button"  value="7" id="num7"  onClick="prepareOperation(this.value)">
                    <input type="button"  value="8" id="num8"  onClick="prepareOperation(this.value)">
                    <input type="button"  value="9" id="num9"  onClick="prepareOperation(this.value)">
                    <input type="button"  value="/" id="divide" onClick="prepareOperation(this.value)">
                </div>

                <div>
                    <input type="button"  value="0" id="num0"    onClick="prepareOperation(this.value)">
                    <input type="button"  value="Clear" id="clear" onClick="clearInputLabel()">
                    <input type="button"  value="=" id="result"  onClick="getResult()">
                    <input type="button"  value="*" id="multiply" onClick="prepareOperation(this.value)">
                </div>

                <div><input type="button"  value="." id="dot"  onClick="prepareOperation(this.value)"><div>

            </div>
            <div id="info"> </div>
        </form>


        </div>




    </body>
</html>
