<?php // Script2.php
require_once("classes/media.class.php");

error_reporting ( 1 );  // evita erros de requisições post ou get nulas



$oper = $_POST["oper"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];



$m1 = new media(); // instanciando o objeto $m1




if ( isset($oper) ) {
    $m1->setMedia($nota1,$nota2,$nota3,$nota4); // executando o método setMedia


}
?>

