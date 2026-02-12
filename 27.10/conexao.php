<?php
$host = "193.123.113.234";
$user = "iea";
$pass = "iea";
$db   = "iea";

// Criar conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
