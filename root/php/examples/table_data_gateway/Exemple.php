<?php

/* EXEMPLO DE CLASSE SIMPLES USADA COM TABLE DATA GATEWAY */

class Example {
    // Atributos
    private $data;
    private static $conn;

    // Método para estabelecer conexão com o banco
    public static function setConnection($conn) {
        self::$conn = $conn;
        ExampleGateway::setConnection($conn);
    }

    // Métodos mágicos para manipulação de atributos
    public function __set($prop, $value) {
        $this->data[$prop] = $value;
    }
    public function __get($prop) {
        return $this->data[$prop];
    }

    // Método mágico para isset()
    public function __isset($prop){
        return isset($this->data[$prop]);
    }

    // Métodos para manipulação e consulta do banco de dados
    public function consultar($par1, $par2) {
        /* POR CÓDIGO AQUI */
    }

    // Regras de negócio
    public function alterar($par1, $par2) {
        /* POR CÓDIGO AQUI */
    }
}