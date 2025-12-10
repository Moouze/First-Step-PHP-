<?php

namespace App;

class ContaBancaria
{
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    public function getBanco()
    {
        return $this->banco;
    }

    public function setBanco($banco)
    {
        $this->banco = $banco;
    }

    public function getNomeTitular()
    {
        return $this->nomeTitular;
    }

    public function setNomeTitular($nomeTitular)
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNumeroAgencia()
    {
        return $this->numeroAgencia;
    }

    public function setNumeroAgencia($numeroAgencia)
    {
        $this->numeroAgencia = $numeroAgencia;
    }

    public function getNumeroConta()
    {
        return $this->numeroConta;
    }

    public function setNumeroConta($numeroConta)
    {
        $this->numeroConta = $numeroConta;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }



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
        if ($valor <= 0) {
            throw new \Exception("Não é possivel depositar esse valor: " . $valor);
        }
        $this->saldo += $valor;

        return $this->saldo;
    }
}