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

    /**
    * Um método abstrato de ser obrigatoriamente implementadado na classe filha
    * @param string $dados 
    */

    public abstract function gerarlog($dados);

}



class ContaPoupanca extends Conta
{
    public function gerarlog($dados)
    {
        echo "<hr> Gerando Log .... Conta Poupança $dados<hr>";
    }
}


class ContaCorrente extends Conta
{
    public function gerarlog($dados)
    {
        echo "<hr> Gerando Log .... Conta Corrente $dados<hr>";
    }
}

$contaPoupanca = new ContaPoupanca();
$contaCorrente = new ContaCorrente();
// $conta = new Conta();

$contaPoupanca->gerarlog('batatinha espalha rama');
$contaCorrente->gerarlog('batatinha espalha rama');

echo "<pre>";
var_dump($contaCorrente);

echo "<hr>";
var_dump($contaPoupanca);
echo "<hr>";

// echo "<hr>";
// var_dump($conta);
// echo "<hr>";

