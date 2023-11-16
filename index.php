<?php

// Inclua as classes
require_once 'Cliente.php';
require_once 'Banco.php';
require_once 'CartaoCredito.php';

// Agora você pode criar instâncias das classes e utilizá-las
$cliente = new Cliente("joao", "joao@email.com", "14999999999", "rua ABC, 123");

$banco = new Banco("Banco XYZ", "Avenida 123, Cidade", "987654321", "Gerente XYZ");

$cartao = new CartaoCredito($banco, $cliente, "MasterCard", 1000, "01/25");


$cartao->comprar(500);
$cartao->comprar(300);

echo "Total de compras: {$cartao->getTotal()}\n";
echo "Extrato: " . implode(", ", $cartao->getExtrato()) . "\n";
echo "Fatura: {$cartao->getFatura()}\n";
