<?php
if (!isset($_GET['oper'])) $_GET["oper"] = "";
if (!isset($_GET["t"])) $_GET["t"] = 0;
if (!isset($_GET["vm"])) $_GET["vm"] = 0;


$t = (double) $_GET["t"];
$vm = (double) $_GET["vm"];
$dCalc = $t * $vm;
$luCalc = $dCalc / 12;

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
    <title>POO - AULA 1 - EX03</title>
</head>
<body>
    <!--
            Efetuar o cálculo da quantidade de litros de combustível gasta em uma viagem, utilizando um
        automóvel que faz 12 Km por litro. Para obter o cálculo, o usuário deve fornecer o tempo gasto
        (TEMPO) e a velocidade média (VELOCIDADE) durante a viagem. Desta forma, será possível obter a
        distância percorrida com a fórmula DISTANCIA ← TEMPO * VELOCIDADE. Possuindo o valor da
        distância, basta calcular a quantidade de litros de combustível utilizada na viagem com a fórmula
        LITROS_USADOS ← DISTANCIA / 12. Ao final, o programa deve apresentar os valores da velocidade
        média (VELOCIDADE), tempo gasto na viagem (TEMPO), a distancia percorrida (DISTANCIA) e a
        quantidade de litros (LITROS_USADOS) utilizada na viagem.
    -->
    <h2>Calcular quantidade de litros de combustível gasta em uma viagem</h2>

    <form name="formEx03" method="get" action="index.php">
        <input type="hidden" name="oper">
        <input type="text" name="t" placeholder="tempo gasto (hr)" >
        <input type="text" name="vm" placeholder="velocidade média (km/h)" >
        <input type="submit" value="Calcular">
        <input type="button" value="Novo Cálculo" onclick="formEx03.oper.value='limpar'; submit();">  
        <div>
            <label for="vm">Velocidade Média: 
            
                <?php echo "{$vm} Km/h"; ?> 
            
            </label>
        </div>
        <div>
            <label for="t">Tempo gasto: 
            
                <?php echo "{$t} horas"; ?> 
            
            </label>
        </div>
              
        <div>
            <label for="dCalc">Distância Percorrida: 
            
                <?php echo "{$dCalc} Km"; ?> 
            
            </label>
        </div>
              
        <div>
            <label for="luCalc">A quantidade de litros ultilizados foi: 
            
                <?php echo "{$luCalc} L"; ?> 
            
            </label>
        </div>

              
    </form>

</body>
</html>