<?php

require __DIR__ . "/../vendor/autoload.php";

use App\ContaBancaria;

$conta = new ContaBancaria(
    "nubank",
    "Lucas",
    121994,
    1020,
    0
);

try {
    $novoSaldo = $conta->depositar(100);
    echo "Saldo atualizado com sucesso! " . $novoSaldo;
} catch (Exception $e) {
    echo $e->getMessage();
}




