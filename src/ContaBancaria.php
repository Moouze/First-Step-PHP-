<?php

namespace App;

class ContaBancaria
{
    public $banco;
    public $nomeTitular;
    public $numeroAgencia;
    public $numeroConta;
    public $saldo;

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function exibirDados()
    {
        return [
            "banco" => $this->banco,
            "nomeTitular" => $this->nomeTitular,
            "numeroAgencia" => $this->numeroAgencia,
            "numeroConta" => $this->numeroConta,
            "saldo" => $this->saldo,
        ];
    }

    public function depositar(float $valor)
    {
        if ($valor <= 0){
            echo "Não é possivel depositar esse valor: " . $valor;
        }
     $this->saldo += $valor;
    }
}