<?php

require __DIR__ . "/../vendor/autoload.php";

use App\ContaBancaria;

$conta = new ContaBancaria("nubank", "Lucas", 121994, 1020, 0);
$conta ->depositar(0);

var_dump($conta->exibirDados());


