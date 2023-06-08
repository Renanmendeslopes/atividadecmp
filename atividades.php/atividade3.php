<?php
$peso = 70; 
$altura = 1.75; 

$imc = $peso / ($altura * $altura);

echo "O seu IMC é: " . round($imc, 2);
?>