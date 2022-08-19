<?php
if (!isset($_POST['oper'])) $_POST["oper"] = "";
if (!isset($_POST["a"])) $_POST["a"] = 0;
if (!isset($_POST["b"])) $_POST["b"] = 0;
if (!isset($_POST["c"])) $_POST["c"] = 0;


$a = (double) $_POST["a"];
$b = (double) $_POST["b"];
$c = (double) $_POST["c"];
$valdelta = getDelta ( $a, $b, $c );
$analise = analiseDelta ( $valdelta );



if ( $_POST['oper'] == "limpar") {
        $calc = "";
}

if ( $valdelta >= 0 ) {

    $x1 = getX1 ( $a, $b, $valdelta );
    $x2 = getX2 ( $a, $b, $valdelta ); 

    echo "\nValor de X1: {$x1}", "\nValor de X2: {$x2}" . "<br>";

}

function getDelta ( $a,$b,$c ) { 
    $del = pow ( $b, 2 ) - 4 * $a * $c;
    return $del;

}

function getX1 ( $a, $b, $valordelta ) { 
    $x1 = (-$b + sqrt ($valordelta ) ) / (2 * $a);
    return $x1;
}

function getX2 ( $a, $b, $valordelta ) { 
    $x2 = (-$b - sqrt ($valordelta ) ) / (2 * $a);
    return $x2;
}

function analiseDelta ( $delta ) {

    if ( $delta == 0 ) {
        return "Duas raizes reais iguais!";
    } 
    else if ( $delta > 0 ) {

        return "Duas raizes reais diferentes!";
    }
    else {
        return "Sem solução!";
    }  
}

