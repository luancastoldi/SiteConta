<script>
window.onload = geraConta;
var vez;
var resultado;



function geraConta(){
				
				let sinal = " X ";
				let igual = " = ";
				var numero1 = Math.floor(Math.random() * 10);
				var numero2 = Math.floor(Math.random() * 11);
				vez = numero1 * numero2;
                resultado = vez;
				document.getElementById('resposta').innerHTML = "Quanto é: " +  numero1 + sinal + numero2;			
		}

</script>


<?php
    include('contas.php');

?>
