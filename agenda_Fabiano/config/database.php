<?php
// config/database.php

$host = "localhost";
$user = "root";
$password = "root";
$database = "agenda_db";

// Conexão com MySQLi
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("ERRO NA CONEXÃO: " . $conn->connect_error);
}

echo "Conexão bem-sucedida!";
?>