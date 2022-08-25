
<?php

if( isset($_GET['calcBhask']) ){
    $a = $_GET['valorA'];
    $b = $_GET['valorB'];
    $c = $_GET['valorC'];

    $valdelta = getDelta($a, $b, $c);
    $analise = analiseDelta($valdelta);

    if ( $valdelta >= 0 ) {
     $x1 = getX1($a, $b, $valdelta);
        $x2 = getX2($a, $b, $valdelta);
    }
}
function getDelta ( $a,$b,$c ) {
    $del = pow ($b, 2) - 4 * $a * $c;
    return $del;
}

function getX1 ( $a, $b, $valordelta ) {
    $x1 = (-$b + sqrt($valordelta) ) / (2 * $a);
    return $x1;
}

function getX2 ( $a, $b, $valordelta ) {
 $x2 = (-$b - sqrt($valordelta) ) / (2 * $a);
 return $x2;
}

function analiseDelta ( $delta ) {

    if ( $delta == 0 ) return "Duas raizes reais iguais!";
    else if ( $delta > 0 ) return "Duas raizes reais diferentes!";
    else return "Sem solução!";

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Bhaskara</title>
</head>
<body>
    <form>

        <input type="number" name="valorA" placeholder="Digite valor A">
        <input type="number" name="valorB" placeholder="Digite valor B">
        <input type="number" name="valorC" placeholder="Digite valor C">
        <input type="submit" name="calcBhask" value="Calcular">

    </form>

    <div>
        O valor de A: <?= $a ?? '0'?> <br>
        O valor de B: <?= $b ?? '0'?> <br>
        O valor de C: <?= $c ?? '0'?> <br>
        O valor de Delta: <?= $valdelta ?? '0'?> <br>
        Analise: <?= $analise ?? '0'?> <br>
        O valor de X1: <?= $x1 ?? '0'?> <br>
        O valor de X2: <?= $x2 ?? '0'?>
    </div>
</body>
</html>
