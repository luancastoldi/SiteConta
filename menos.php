
<script>
window.onload = geraConta;
var menos;
var resultado;


function geraConta(){
				
				let sinal = " - ";
				let igual = " = ";
				var numero1 = Math.floor(Math.random() * 10);
				var numero2 = Math.floor(Math.random() * 11);
                if (numero1 >= numero2){
                    menos = numero1 - numero2;
                    resultado = menos;
				    document.getElementById('resposta').innerHTML = "Quanto é: " +  numero1 + sinal + numero2;
                }else{
                    menos = numero2 - numero1;
                    resultado = menos;
				    document.getElementById('resposta').innerHTML = "Quanto é: " +  numero2 + sinal + numero1;
                }
               
		}
</script>

<?php
    include('contas.php');

?>
