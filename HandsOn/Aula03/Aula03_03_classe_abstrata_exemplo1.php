<?php

abstract class Conta
// class Conta
{

    public $saldo = 0;
    public $titular;
   
    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function verSaldo() 
    {
        return $this->saldo;
    } 
}

class ContaCorrente extends Conta
{
}

class ContaPoupanca extends Conta
{
}

$contaPoupanca = new ContaPoupanca();
$contaCorrente = new ContaPoupanca();
$conta = new Conta();

echo "<pre>";
var_dump($contaCorrente);

echo "<hr>";
var_dump($contaPoupanca);


echo "<hr>";
var_dump($conta);
echo "<hr>";

