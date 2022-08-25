<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Bhaskara</title>
</head>

<body>
    <h1>Cálculo Bhaskara</h1>
    <form action="calcBhaskara.php" method="post" name="formBhaskara">
        <input type="hidden" name="oper">
        <input type="number" name="a" id="valorA" placeholder="Insira o Valor de A">
        <input type="number" name="b" id="valorB" placeholder="Insira o Valor de B">
        <input type="number" name="c" id="valorC" placeholder="Insira o Valor de C">

        <label for="resultado">
            <?php     
                return "${$analise}"
            ?>

        </label>
        <input type="submit" value="calcular">
        <input type="button" value="novo calculo" onclick="formBhaskara.oper.value='limpar'; submit();">

    </form>
</body>

</html>