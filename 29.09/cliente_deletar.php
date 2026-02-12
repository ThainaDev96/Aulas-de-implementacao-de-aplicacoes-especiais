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
if (!empty($nome) && (!empty($id))  )
{
    $sql = "delete from usuario where usuario  ='$nome' and id ='$id' ";
    echo "entrou no if <br>";
}
if (!empty($nome)  && empty($id))
{
    $sql = "delete from usuario where usuario  ='$nome'";
        echo "entrou no if nome <br>";
}    
if (!empty($id) && empty($nome) )
{
    $sql = "delete from usuario where id  ='$id'";
           echo "entrou no if id <br>";
}

print $sql;

if ($conn->query($sql) === TRUE) {
    echo " Registro deletado com sucesso " ;
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
