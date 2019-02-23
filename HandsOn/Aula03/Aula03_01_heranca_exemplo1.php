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

class ContaPoupanca extends Conta
{
    public $aniversario = 6;

    public function aplicar($valor)
    {
        echo "<hr> Aplicação efetuada <b>$valor</b> <hr>";
        $this->depositar($valor);
    }
}

class ContaPoupancaConjunta extends ContaPoupanca
{}

$conta = new Conta();
$conta->depositar(1200);

$contaPoupanca = new ContaPoupanca();
$contaPoupanca->depositar(2000);
$contaPoupanca->aplicar(2000);

$contaPoupancaConjunta = new ContaPoupancaConjunta();
$contaPoupancaConjunta->aplicar(100);

echo '<pre>';
var_dump($conta);
var_dump($contaPoupanca);
echo '<hr>';
// var_dump($contaPoupanca);
// echo '<hr>';
var_dump($contaPoupancaConjunta);
echo '<hr>';
echo 'Saldo conta conjunta: ' . $contaPoupancaConjunta->verSaldo();




