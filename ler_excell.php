<?php

error_reporting(0);
require_once 'libs/PHPExcel/Classes/PHPExcel.php';

// Caminho do arquivo Excel (.xls ou .xlsx)
$arquivo = 'dados.xls';

// Verifica se o arquivo existe
if (!file_exists($arquivo)) {
    die("Arquivo não encontrado: " . $arquivo);
}

// verifica qual o tipo de arquivo (xls, xlsx, etc)
$tipoArquivo = PHPExcel_IOFactory::identify($arquivo);
$objReader = PHPExcel_IOFactory::createReader($tipoArquivo);
$objPHPExcel = $objReader->load($arquivo);
$sheet = $objPHPExcel->getSheet(0);
$ultimaLinha = $sheet->getHighestRow();
$ultimaColuna = $sheet->getHighestColumn();

// Exibe os dados em tabela HTML
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Nome</th><th>Email</th></tr>";

// Começa da linha 2 (supondo que a 1 é cabeçalho)
for ($linha = 2; $linha <= $ultimaLinha; $linha++) {
    $nome = $sheet->getCell("A$linha")->getValue();
    $email = $sheet->getCell("B$linha")->getValue();

    if (!empty($nome) && !empty($email)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($nome) . "</td>";
        echo "<td>" . htmlspecialchars($email) . "</td>";
        echo "</tr>";
    }
}

echo "</table>";
?>
