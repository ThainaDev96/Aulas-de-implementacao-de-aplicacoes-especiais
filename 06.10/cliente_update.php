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
$nome  = $_GET['nome'];
$id    = $_GET['id'];
// Query de inserção
if (!empty($id) )
{
    $sql = "UPDATE alunos SET nome  = '$nome' WHERE id_fdb =$id; ";
    
}

if ($conn->query($sql) === TRUE) {
    echo " Atualizado com sucesso " ;
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
