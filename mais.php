<script>

window.onload = geraConta;
var soma;
var resultado;


function geraConta(){
				
				let sinal = " + ";
				let igual = " = ";
				var numero1 = Math.floor(Math.random() * 10);
				var numero2 = Math.floor(Math.random() * 11);
				soma = numero1 + numero2;
                resultado = soma;
				document.getElementById('resposta').innerHTML = "Quanto é: " +  numero1 + sinal + numero2;
				
		}

</script>


<?php

    include('contas.php');

?>
