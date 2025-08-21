<?php

/* EXEMPLO DE CLASSE SIMPLES USADA COM TABLE DATA GATEWAY */

class Example {
    // Atributos
    private $data;
    private static $conn;

    // Método para estabelecer conexão com o banco
    public static function setConnection($conn) {
        self::$conn = $conn;
    }

    // Métodos mágicos para manipulação de atributos
    public function __set($prop, $value) {
        $this->data[$prop] = $value;
    }
    public function __get($prop) {
        return $this->data[$prop];
    }

    // Métodos mágicos para debug
    public function __toString() {
        $table = "<table border>";

        $table .= "<tr><th colspan='" . count($this->data) . "'>";
        $table .= strtoupper(__CLASS__);
        $table .= "</th></tr>";

        $table .= "<tr>";
        foreach (array_keys($this->data) as $attr) {
            $table .= "<th>" . $attr . "</th>";
        }
        $table .= "</tr>";

        $table .= "<tr>";
        foreach ($this->data as $values) {
            $table .= "<td>" . $values . "</td>";
        }
        $table .= "</tr>";

        $table .= "</table>";

        return $table;
    }
    public function __debugInfo() {
        return $this->data;
    }

    // Método mágico para isset()
    public function __isset($prop){
        return isset($this->data[$prop]);
    } 

    // Métodos auxiliares
    public function getData() {
        return $this->data;
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