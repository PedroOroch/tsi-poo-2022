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

        }

        private function setRegistrar () 
        {
            $this->email    = $email;
            $this->tel      = $telefone;
            $this->cod      = $codAcesso;

        }

        private function setValidar () 
        {
            $this->cod          = $codAcesso;
            $this->validado     = $validado;
        }

        private function setLogin ($login, $codAcesso) 
        {
            $this->log      = $login;
            $this->cod      = $codAcesso;
        }
        

    }