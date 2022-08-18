<?php
if (!isset($_GET['oper'])) $_GET["oper"] = "";

if (!isset($_GET["comp"])) $_GET["comp"] = 0;
if (!isset($_GET["l"])) $_GET["l"] = 0;
if (!isset($_GET["h"])) $_GET["h"] = 0;


$comp = (double) $_GET["comp"];
$l = (double) $_GET["l"];
$h = (double) $_GET["h"];

$calc = $comp * $l * $h;


if ( $_GET['oper'] == "limpar")
    {
        $calc = "";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - AULA 1 - EX05</title>
</head>
<body>
    <!--
       Elaborar um programa que calcule e apresente o volume de uma caixa retangular, por meio da fórmula
VOLUME ← COMPRIMENTO * LARGURA * ALTURA.
    -->
    <h2>Calcular Volume de uma Caixa Retangular</h2>

    <form name="formEx05" method="get" action="index.php">
        <input type="hidden" name="oper">
        <input type="text" name="comp" placeholder="Comprimento (cm)">
        <input type="text" name="l" placeholder="Largura (cm)">
        <input type="text" name="h" placeholder="Altura (cm)">
        <input type="submit" value="Calcular">
        <input type="button" value="Novo Cálculo" onclick="formEx05.oper.value='limpar'; submit();">  
        <div>
            <label for="vm"> O volume da Caixa Retangular é
                <?php echo "${calc} ml"; ?> 
            
            </label>
        </div>        
    </form>

</body>
</html>