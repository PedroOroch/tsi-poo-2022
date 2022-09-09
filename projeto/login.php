<?php
require_once("classes/registro.class.php");

$obj = new registro();

if ( $_POST["Entrar"] )
{
    $login = $_POST['login'];
    $senha = $_POST['pw'];
    $obj->setLogin($login, $senha);

}
$obj = NULL;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <div class="login">
            <label for="login">Usuario:</label>
            <input type="text" name="login" id="log" placeholder="Digite o Nome de usuário">
        </div>
        <div class="password">
            <label for="pw">Senha:</label>
            <input type="password" name="pw" id="pw" placeholder="Digite a Senha">
        </div>
        <div class="submit">
            <input type="submit" value="Entrar" onclick="logar();">
            <div>
                Não tem Cadastro? <a href="cadastro.php">Cadastre-se Já!</a>
            </div>
        </div>
        
    </form>
</body>
<script src="script.js"></script>
</html>