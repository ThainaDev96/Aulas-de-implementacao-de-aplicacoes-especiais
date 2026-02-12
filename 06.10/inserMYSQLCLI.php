<?php
$servername = "193.123.113.234";
$username   = "iea";
$password   = "iea";
$dbname     = "iea";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Query SELECT
$sql = "SELECT id, usuario, senha FROM usuario";
$result = $conn->query($sql);

// Verificar se retornou linhas
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . 
        
             " - Nome: " . $row["usuario"] . 
             " - Senha: " . $row["senha"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

$conn->close();
?>

 