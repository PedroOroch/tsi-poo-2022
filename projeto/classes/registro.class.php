<?php

    class Registro 
    {
        private $cliente_id;
        private $login;
        private $email;
        private $telefone;
        private $codAcesso;
        private $validado;
        private $tipo;

        private function setUsuario ($log, $email, $tel, $tipo)
        {
            $this->log      = $login;
            $this->email    = $email;
            $this->tel      = $telefone;
            $this->tipo     = $tipo;

            $this->log            = $_POST["user"];
            $this->email          = $_POST["email"];
            $this->tel            = $_POST["tel"];

            $sql =  "INSERT INTO usuario (nome, email, telefone) VALUES ('{$this->log}', '{$this->email}', '{$this->tel}')";

            $res = $con->query($sql);


        }

        private function setRegistrar ($codAcesso) 
        {

        }

        private function setValidar ($codAcesso, $validado, $tipo) 
        {

        }

        private function setLogin ($login, $codAcesso) 
        {

        }
        

    }