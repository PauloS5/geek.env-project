<?php

try {
    $dsn = "mysql:host=localost;dbname=dbGeekEnv;";
    $user = "root";
    $password= "";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $conn = new PDO($dsn, $user, $password, $options);
} catch (PDOException$e) {
    echo "ERROR: " . $e->getMessage();
    die();
}