<?php
if (!isset($_GET['oper'])) $_GET["oper"] = "";
if (!isset($_GET["tempC"])) $_GET["tempC"] = 0;


$C = (double) $_GET["tempC"];
$calc = (9 * $C + 160)/5;

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
    <title>PO
    O - AULA 1 - EX01</title>
</head>
<body>
    <h2>Conversor de Celsius para Fahrenheit</h2>

    <form name="formEx01" method="get" action="index.php">
        <input type="hidden" name="oper">
        <input type="text" name="tempC" placeholder="Temperatura em Celsius" >
        <label for="vltemp">Temperatura para Fahrenheits é: 
        
            <?php echo "{$calc}"; ?>
        
        </label>
        <input type="submit" value="Calcular">
        <input type="button" value="Nova Temperatura" onclick="formEx01.oper.value='limpar'; submit();">

    </form>

</body>
</html>