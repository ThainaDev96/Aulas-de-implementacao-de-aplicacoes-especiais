<?php
include("conta.php");

$nova = new conta();
$nova_variavel = $nova->saldo();
print("Valor do saldo = ".$nova_variavel);
$nova->credito(50);
$nova_variavel = $nova->saldo();
print("Valor do saldo = ".$nova_variavel);

?>