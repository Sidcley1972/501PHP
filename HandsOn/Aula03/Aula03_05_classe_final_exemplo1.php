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



final class ContaPoupanca extends Conta
{
    public function gerarlog($dados)
    {
        echo "<hr> Gerando Log .... Conta Poupança<hr> $dados";
    }
}


// final class ContaCorrente extends Conta
class ContaCorrente extends Conta
{
    public function gerarlog($dados)
    {
        echo "<hr> Gerando Log .... Conta Corrente<hr> $dados";
    }
}

class ContaConjunta extends ContaCorrente
// class ContaConjunta extends Conta
{
    public function gerarlog($dados)
    {
        echo "<hr> Gerando Log .... Conta Conjunta<hr> $dados";
    }
}

class ContaNova extends Conta
{
    public function gerarlog($dados)
    {
        echo "<hr> Gerando Log .... Conta nova<hr> $dados";
    }
}

$contaPoupanca = new ContaPoupanca();
$contaCorrente = new ContaCorrente();
// $conta = new Conta();

$contaPoupanca->gerarlog('Deu erro - Poupança!');
$contaCorrente->gerarlog('Deu erro - Corrente!');

echo "<pre>";
var_dump($contaCorrente);

echo "<hr>";
var_dump($contaPoupanca);
echo "<hr>";

// echo "<hr>";
// var_dump($conta);
// echo "<hr>";

