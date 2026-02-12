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
$id   = $_GET['id'];
$nome = $_GET['nome'];
$tipo = $_GET['tipo'];
$telefone = $_GET['telefone'];
$email = $_GET['email'];
$mensagem  = "";

if($tipo=="Salvar")
{    
// Query de inserção
    $sql = "INSERT INTO alunos (nome,telefone,email) VALUES ('$nome','$telefone','$email')";
    $mensagem = "Inserido com Sucesso!!";
}
if($tipo=="Atualizar")
{    
// Query de inserção
    $sql = "update alunos set nome ='$nome', telefone='$telefone' ,email='$email' where id = $id ";
    $mensagem = "Atualizado com Sucesso!!";
}
if($tipo=="Deletar")
{    
// Query de inserção
    $sql = "delete from  alunos where id = $id ";
    $mensagem = "Deletado com Sucesso!!";
}



if ($conn->query($sql) === TRUE) {
    echo $mensagem;
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

