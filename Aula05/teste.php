<?php
require_once ("classes/funcionario.class.php");

$func           = new Funcionario(); // instanciamento da classe filha ou subclasse
$func->email    = " pedro@orochmail.com.br"; // Atributo da SuperClasse
$func->telefone = " 1234-56789"; // Atributo da SuperClasse
$func->nome     = " Pedro Oroch"; // Atributo da classe SubClasse

$html ="<pre><br>Funcionário:{$func->email}<br>Telefone:{$func->telefone}";
$html .= "<br>Nome:{$func->nome} </pre>";

$func->exibirPessoa ($html); // envia html para a SuperClasse