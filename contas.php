
<!DOCTYPE html>
<html>
<head>
	<title>Contas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/unsemantic-grid-responsive.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="zero.ico" type="image/x-icon" />
<script> 
	var pontos = 0;
	var win = 0;
	var defeat = 0;


		document.addEventListener('keypress', function(e){
       		if(e.which == 13){
          		novaConta();
    		}
			}, false);
			
		function limpaResultado(){
			// document.getElementById('esperando').innerHTML = "";
			document.getElementById('r1').style.background = "white";
		}	


		function geraPontos(){
			document.getElementById('points').innerHTML = "Pontos: " + pontos;
			document.getElementById('placar').innerHTML = "Certas: " + win +  " || " +"Erradas: " + defeat;
		}

  
		function novaConta(){
			validaContas();
			geraPontos();
			geraConta();
		}
	
        function validaContas()
        {	    	
              if (document.getElementById("r1").value == resultado){ 
			
			window.setTimeout(limpaResultado, 2500);
			document.getElementById('r1').style.background = "chartreuse";
			// document.getElementById('esperando').innerHTML = "PARABÉNS";
			pontos = pontos + 10;
			win = ++win;
			   
			   
               }else{

			window.setTimeout(limpaResultado, 2500);
			// document.getElementById('esperando').innerHTML = "ERROU " + "[" + "R:" + resultado + "]";
			document.getElementById('r1').style.background = "red";
			pontos = pontos - 10
			defeat = ++defeat;
			
  	       	   }
					document.getElementById("r1").value = "";
					
									
		}
</script>
</head>
<body>
	


<div class="grid-container-100 centro">


	<div class="grid-100 centro">

			<p class="negrito" id="resposta"></p>
			 <input type="text" name="r1" id="r1" maxlength="2" autofocus="autofocus" autocomplete="off" required="required">

			 <br>

		<div class="espaso">
		<button  onclick="novaConta()">RESPONDER</button>
		
		<h1 class="resp" id="points">Pontos: 0</h1>
		<h3 class="negrito" id="placar"></h3>
		
		
		</div>	
	
		<div>
		<p style="color: black;">Selecione o Operador:</p>

		

		<h3>
		<a class="btnF" href="mais.php">+</a>
		<a class="btnF" href="menos.php">-</a> 
		<a class="btnF" href="vezes.php">X</a>
	    </h3>

		<a target="blank" href="https://www.facebook.com/luancarlos.castoldi?ref=bookmarks"><h5>Desenvolvido por: Luan Castoldi</h5></a>
		</div>
</div>



</body>
</html>