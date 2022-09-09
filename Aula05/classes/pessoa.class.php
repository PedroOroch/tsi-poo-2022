<?php

class Pessoa 
{

    public $email;
    public $telefone;
    public $cep;
    public $logradouro;
    public $numero;
    
    function setPessoa ($email, $tel, $cep, $log, $num):void
    {
        $this->email        = $email;
        $this->telefone     = $telefone;
        $this->cep          = $cep;
        $this->logradouro   = $logradouro;
        $this->numero       = $numero;
    }

    function exibirPessoa ($html):void 
    {
        echo $html;
    }
    
}