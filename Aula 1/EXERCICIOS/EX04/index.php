<?php
if (!isset($_GET['oper'])) $_GET["oper"] = "";

if (!isset($_GET["vlr"])) $_GET["vlr"] = 0;
if (!isset($_GET["tx"])) $_GET["tx"] = 0;
if (!isset($_GET["t"])) $_GET["t"] = 0;


$vlr = (double) $_GET["vlr"];
$tx = (double) $_GET["tx"];
$t = (double) $_GET["t"];

$calc = $vlr + ($vlr * $tx / 100) * $t;


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
    <title>POO - AULA 1 - EX04</title>
</head>
<body>
    <!--
           Efetuar o cálculo e a apresentação do valor de uma prestação em atraso, utilizando a fórmula
        PRESTACAO ← VALOR + (VALOR * TAXA/100) * TEMPO).
    -->
    <h2>Calcular valor de uma prestação em atraso</h2>

    <form name="formEx04" method="get" action="index.php">
        <input type="hidden" name="oper">
        <input type="text" name="vlr" placeholder="Valor a Pagar - R$:" >
        <input type="text" name="tx" placeholder="Taxa" >
        <input type="text" name="t" placeholder="Tempo (meses)" >
        <input type="submit" value="Calcular">
        <input type="button" value="Novo Cálculo" onclick="formEx04.oper.value='limpar'; submit();">  
        <div>
            <label for="vm">Valor da Prestação a pagar é: 
            
                <?php echo "R$${calc}"; ?> 
            
            </label>
        </div>        
    </form>

</body>
</html>
