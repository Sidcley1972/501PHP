<?php

interface ContasInterface
{
    //com type hinting
    public function sacar(float $valor);
    public function depositar (float $valor);
    public function verSaldo(float $valor) :float;
}

class ContaCorrente implements ContasInterface
{
    public $saldo = 0;


    public function sacar(float $valor)
    {
        $this ->saldo -= $valor;
    }

    public function depositar(float $valor)
    {
        $this->saldo += $valor;
    }

    public function verSaldo($valor) :float
    {
        return $this->saldo;
    }
}

class ContaPoupanca implements ContasInterface
{
    public $saldo = 0;

    public function sacar(float $valor)
    {
        echo "<hr> Saque Efetuado: $valor <hr>";
        $this->saldo -= $valor;
    }

    public function depositar(float $valor)
    {
        echo "<hr> Depósito Efetuado: $valor <hr>";
        $this->saldo += $valor;
    }    

    public function verSaldo($valor) :float
    {
        return $this->saldo;
    }        

}

class ContaSemInterface 
{
}    

class Aplicacao 
{
    public function aplicar(ContasInterface $conta)
    {
        echo 'Ver Saldo: ' . $conta->verSaldo();
    }
}    

$contaCorrente = new ContaCorrente();
$contaCorrente-> depositar(500);

$contaCorrente = new ContaPoupanca();
$contaCorrente-> depositar(800);
$contaSemInterface = new ContaSemInterface();

$aplicacao = new Aplicacao();
$aplicacao->aplicar($contaPoupanca);

echo '<hr>';

echo 'È uma instância de ContasSemInterface: <br>';
var_dump($contaPoupanca instanceof ContaSemInterface);
echo '<br>';
echo 'È uma instância de ContasPoupanca: <br>';
var_dump($contaPoupanca instanceof ContaPoupanca);
echo '<br>';      
echo 'È uma instância de ContasInterface: <br>';
var_dump($contaPoupanca instanceof ContasInterface);

echo '<hr>';

echo 'È uma instância de ContasSemInterface: <br>';
var_dump($contaCorrente instanceof ContaSemInterface);
echo '<br>';
echo 'È uma instância de ContasCorrente: <br>';
var_dump($contaCorrente instanceof ContaCorrente);
echo '<br>';
echo 'È uma instância de ContasInterface: <br>';
var_dump($contaCorrente instanceof ContasInterface);
echo '<br>';
