
<?php
if(!isset($_POST['oper'])) $_POST['oper'] = "";

if ( !isset ( $_POST['number'] ) ) { 
    $_POST['number'] = "";
}

$per = $_POST["number"];

if ( isset($_POST['oper']) == "limpar") {
    $diametro = "";
    $raio = "";
    $area = "";
}

const PI = 3.14;

$diametro = getDiametro($per);
$raio = getRaio($diametro);
$area = getArea($raio);

function getDiametro ($x) {
    $diam = (float)$x / PI;
    return $diam; 
}

function getRaio ($x) {
    $raio = $x / 2;
    return $raio;
}

function getArea ($x) {
    $area = $x * $x * PI;
    return $area;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Circunferência</title>
</head>
<body>
    <h1>Calcular Circunferência</h1>
    <form method="post" name="formCircu">
        <input type="hidden" name ="oper">
        <input type="number" name="number" id="N" placeholder="Digite o Perímetro">
        <div>
            <input type="submit" value="calcular">
            <input type="button" value="novo calculo" onclick="formCircu.oper.value='limpar'; submit();">
        </div>
    </form>
    <div>
        Aqui está os valores da Circunferência:
    </div>
    
    <div>
        <ul>
            <li>O diametro é: <?= $diametro ?? ' --'; ?></li>
            <li>O raio é: <?= $raio ?? ' --'; ?></li>
            <li>A area é: <?= $area ?? ' --'; ?></li>
        </ul>
    </div>
</body>
</html>
