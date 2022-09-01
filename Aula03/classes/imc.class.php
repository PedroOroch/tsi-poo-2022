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
        if ($imc > 18.5 && $imc < 24.99 ) {
            echo "Peso Normal\n";
            echo "\n<img src='../EXERCICIOS/img/carinhafeliz1.jpg' alt='carinha feliz'>\n<img src='../EXERCICIOS/img/carinhafeliz2.jpg' alt='carinha feliz'>";
        } else if ($imc > 25 && $imc < 29.99 ) {
            echo "Acima do Peso\n";
            echo "\n<img src='../EXERCICIOS/img/shrug.jpg' alt='¯\_(ツ)_/¯'>";
        } else if ($imc > 30) {
            echo "Você está Obeso\n";
            echo "\n<img src='../EXERCICIOS/img/carinhatriste1.jpg' alt='carinha triste'>\n<img src='../EXERCICIOS/img/carinhatriste2.jpg' alt='carinha triste'>";
        } else if ($imc < 18.5) {
            echo "Abaixo do Peso\n";
            echo "\n<img src='../EXERCICIOS/img/carinhatriste1.jpg' alt='carinha triste'>\n<img src='../EXERCICIOS/img/carinhafeliz1.jpg' alt='carinha feliz'>";

        }
    }
}
