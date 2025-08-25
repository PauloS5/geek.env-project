<?php

/* EXEMPLO DE GATEWAY USADO COM TABLE DATA GATEWAY */

class ExampleGateway {
    // Atributos
    private static $conn;

    // Método para estabelecer conexão com o banco
    public static function setConnection($conn) {
        self::$conn = $conn;
    }

    // Métodos de consulta ao banco de dados
    public static function findById($id) {
        /* POR CÓDIGO AQUI */
    }
    public static function all() {
        /* POR CÓDIGO AQUI */
    }

    // Métodos de manipulação do banco de dados
    public function save($data) {
        /* POR CÓDIGO AQUI */
    }
    public function delete($id) {
        /* POR CÓDIGO AQUI */
    }

    // Métodos auxiliares   
    public function getLastid() {
        /* POR CÓDIGO AQUI */
    }
}