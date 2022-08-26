<?php

class imc { 
    
    public $peso; 
    public $altura;


    // Modificador public permite o acesso aos atributos e métodos para outros códigos fora da classe
    // Métodos
    public function setValues($p, $h) { 
        
        $this->peso = $p;
        $this->altura = $h;
    }

    public function getIMC() {
        $imc = $this->peso / ($this->altura * $this->altura);
        return $imc; 
    }

    public function getStats(){
        $imc = $this->getIMC();
        if ($imc <= 18.5 || $imc <= 24.99 ) {
            echo "Peso Normal";
        } else if ($imc > 24 && $imc > 24.99 ) {
            echo "Acima do Peso";
        } else if ($imc > 30 && $imc > 34.99) {
            echo "Você está Obeso";
        }
    }

}