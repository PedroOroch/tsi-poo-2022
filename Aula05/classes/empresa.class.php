<?php
require_once("pessoa.class.php" );

class Empresa extends Pessoa
{
    public $razaosocial;
    public $cnpj;
    public $inscricaoestadual;

    function setEmpresa ( $rs, $cnpj, $ie ): void
    {
        $this->razaosocial = $rs;
        $this->cnpj = $cnpj;
        $this->inscricaoestadual = $ie;
    }
}