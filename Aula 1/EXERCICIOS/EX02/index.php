<?php
if (!isset($_GET['oper'])) $_GET["oper"] = "";
if (!isset($_GET["r"])) $_GET["r"] = 0;
if (!isset($_GET["h"])) $_GET["h"] = 0;


$r = (double) $_GET["r"];
$h = (double) $_GET["h"];
$calc = (3.14 * ($r ^ 2) * $h);

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
    <title>POO - AULA 1 - EX02</title>
</head>
<body>
    <h2>Calcular Volume da lata de óleo</h2>

    <form name="formEx02" method="get" action="index.php">
        <input type="hidden" name="oper">
        <input type="text" name="r" placeholder="raio" >
        <input type="text" name="h" placeholder="altura" >
        <div>
            <label for="volume">O volume da lata de óleo é: 
            
                <?php echo "{$calc} L"; ?> 
            
            </label>
            <input type="submit" value="Calcular">
            <input type="button" value="Nova Temperatura" onclick="formEx02.oper.value='limpar'; submit();">
        </div>

    </form>

</body>
</html>
