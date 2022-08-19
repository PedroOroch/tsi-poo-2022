<?php

//No php uma função pode ter um retorno, isto é, armazenam alguma coisa em si mesma ou simplesmente não têm retorno, servindo apenas para executar um bloco de comandos. Abaixo temos uma simulação de código com os dois tipos.

$x = 9; // EXEMPLO 1
$y = 7.4;
$media = getMedia($x,$y); // para executar uma função com retorno usa-se uma variável
exibirMedia($x, $y, $media); // para executar uma função sem retorno não se usa variáveis
function getMedia($a, $b)
{

    $minhamedia = ($a+$b)/2;
    return $minhamedia;

}
function exibirMedia ($a, $b, $media) // parâmetros são variáveis de entrada da função
{
    echo "\nValor de a....: " , $a;
    echo "\nValor de b....: " , $b;
    echo "\nValor da Média: " , $media, "\n";

}

//------------------------------------------
//Parâmetros são variáveis de entrada declaradas dentro dos parentesis. As variáveis declaradas dentro das funções são variáveis locais e as variáveis declaradas fora das funções são variáveis globais.

// EXEMPLO 2
$a = -10; $b = 11; $c = 4;
$valdelta = getDelta ( $a, $b, $c );
$analise = analiseDelta ( $valdelta );
echo "\nA:" . $a, "\nA:" . $b, "\nCA:" . $c, "\nDelta:" . $valdelta, "\nAnálise:" . $analise . "<br>";
if ( $valdelta >= 0 ) { $x1 = getX1 ( $a, $b, $valdelta );
$x2 = getX2 ( $a,$b,$valdelta );
echo "\nValor de X1: {$x1}", "\nValor de X2: {$x2}" . "<br>"; }
function getDelta ( $a,$b,$c ) { $del = pow ( $b, 2 ) - 4 * $a * $c;
return $del;}
function getX1 ( $a, $b, $valordelta ) { $x1 = (-$b + sqrt ($valordelta ) ) / (2 * $a);
return $x1;}
function getX2 ( $a, $b, $valordelta ) { $x2 = (-$b - sqrt ($valordelta ) ) / (2 * $a);
return $x2;}
function analiseDelta ( $delta ) {
if ( $delta == 0 ) return "Duas raizes reais iguais!";
else if ( $delta > 0 ) return "Duas raizes reais diferentes!";
else return "Sem solução!"; }
