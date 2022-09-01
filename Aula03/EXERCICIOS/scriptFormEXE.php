<?php

require_once ( "../classes/imc.class.php" );

error_reporting (1 );  // evita erros de requisições post ou get nulas

$oper = $_POST["oper"];

$peso = $_POST["peso"];
$altura = $_POST["altura"];

$imc = new imc(); // instanciando o objeto $m1

if ( $oper == "1") {
    $imc->setValues($peso, $altura); // executando o método setMedia
} else if ($oper == "2") {

    $peso = 0;
    $altura = 0;
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calcular IMC</title>
</head>
<body>
    <center> 
    <h2> Calcular IMC </h2>

    <form name = form1 action = 'scriptFormEXE.php' method='post' enctype = 'multipart/form-data'>
        <input type="hidden" name="oper">
    <br><label for="pes">Peso: </label>
       <input type='text' name = "peso" value = "<?php echo $peso; ?>">

       <br><label for="altur">altura: </label>
       <input type='text' name = "altura" value = "<?php echo $altura; ?>">
       <br>
        <input type="button" value="Calcular IMC" onclick = "form1.oper.value = 1; submit();">
            &nbsp; &nbsp;<input type="button" value="Limpar" onclick = "form1.oper.value = 2; submit();">
       <br><label for="imc">imc: </label>
       <input type='text' name = "imc" value = "<?php echo $imc->getIMC(); ?>">
            <br>

            <br>
      
            <?php
                echo "Status da Situação: ";
                if($altura != 0) 
                    echo $imc->getStats();
                else
                    echo "";
               
            ?>
            </label>

        

           
        </form>
       
    </center>
</body>
</html>