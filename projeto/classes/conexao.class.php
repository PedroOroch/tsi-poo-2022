<?php

class Conexao {

    private $conn = new mysqli("localhost", "root", "", "protocolo")
    // Create connection
    private function conect() {
        $this->$conn;
    }
    private $conn = new mysqli("localhost", "root", "", "protocolo")
    // Check connection


    private function checarErro() {
        if ($conn->connect_error) { 
            die("Connection failed: " . $conn->connect_error);
        }

    }

    $conn->close();
}
