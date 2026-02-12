<?php
$servername = "193.123.113.234";
$username   = "iea";
$password   = "iea";
$dbname     = "iea";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);
                  //servidor/usuario/senha/bancodedados

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Dados para inserir
$nome  = $_GET['usuario'];
$email = $_GET['senha'];

// Query de inserção
$sql = "INSERT INTO usuario (usuario, senha) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Novo registro inserido com sucesso. ID: " . $conn->insert_id;
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

