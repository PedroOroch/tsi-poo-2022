<?php

// Criando variáveis numéricas no PHP
$numInteiro = 1234; echo "\n" . gettype($numInteiro); // Número inteiro
$numNegativo= -333; echo "\n" . gettype($numNegativo); // Número negativo
$numReal = 123.44; echo "\n" . gettype($numReal); // Número real
$numOctal = 0123; echo "\n" . gettype($numOctal); // octal número 83 em decimal
$numhexa = 0x1A; echo "\n" . gettype($numhexa); // hexadecimal número 26 em decimal
$notCien = 4e23; echo "\n" . gettype($notCien); // notação científica
$nome = "Eliseu Lemes"; echo "\n" . gettype($nome); // String

// Criando Constantes no PHP
define("pi", 3.14); // através da função define é possível criarmos constantes no PHP
$raio = 10;
$area = pow($raio,2) * pi;
echo $area;

?>