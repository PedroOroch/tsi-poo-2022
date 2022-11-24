<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="user">Usuario: </label>
            <input type="text" name="user" id="user" placeholder="Digite o nome de usuário">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="exemplo@mail.com">
        </div>
        <div>
            <label for="tel">Telefone: </label>
            <input type="tel" name="tel" id="tel" placeholder="XX XXXX-XXXX">
        </div>
        <div class="butoes">
            <input type="submit" value="se matar" onclick="registrar();"    >
            <input type="button" value="Receber Código" onclick="rCodigo();">
            <input type="button" value="Validar Código" href="#">
        </div>
    </form>
</body>
<script src="script.js"></script>
</html>