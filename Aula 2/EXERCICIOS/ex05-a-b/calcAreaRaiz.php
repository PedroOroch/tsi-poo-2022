
<?php

//      == EXERCICIO (A) ==

$b = 8; //base
$h = 12; //altura

$area = calcArea($b, $h);
exibArea($b, $h, $area);

function calcArea ($x, $y) {
    $area = $x * $y / 2;
    return $area;
}

function exibArea ($b, $h, $area) 
{
echo "\nValor de base é = " , $b;
echo "\nValor de altura é = " , $h;
echo "\nValor da area é = " , $area, "\n";
}

//      == EXERCICIO (B) ==


$valorA = 6;
$valorB = 2;
$valorD = 3;
$valorC = 5;

$mediaGeo = getGeo($valorA, $valorB, $valorC, $valorD);

exibirMediaGeo($valorA, $valorB, $valorC, $valorD, $mediaGeo);

function getGeo($a, $b, $c, $d) {

    $media = $a * $b * $c * $d;
    $rQuarta = pow($media, 1/4);
    return $rQuarta;

}

function exibirMediaGeo($a, $b, $c, $d, $e) {

    echo "\nValor a: " , $a;
    echo "\nValor b: " , $b;
    echo "\nValor c: " , $c;
    echo "\nValor d: " , $d;
    echo "\nValor da Média Geométrica: " , $e;
    
}
