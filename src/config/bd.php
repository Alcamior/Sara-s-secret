<?php

    $host = 'mysql.webcindario.com';
    $db = 'sarassecret';
    $user = 'sarassecret';
    $pass = 'password123';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
?>
