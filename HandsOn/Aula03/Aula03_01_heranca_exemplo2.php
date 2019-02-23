<?php

class Conta
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
    public function sacar($valor)
    {
        echo "<hr> Saque efetuado <b>$valor</b> <hr>";
        // O parent faz referencia a classe pai
        parent::sacar($valor);
    }
}


$conta = new Conta();
$conta->depositar(2500);
$conta->sacar(200);

echo "<hr>";

$contaCorrente = new ContaCorrente();
$contaCorrente->depositar(2500);
$contaCorrente->sacar(800);

echo "<hr>";
echo 'Saldo Conta: ' . $conta->verSaldo();

echo "<hr>";
echo 'Saldo Conta Corrente: ' . $contaCorrente->verSaldo();

