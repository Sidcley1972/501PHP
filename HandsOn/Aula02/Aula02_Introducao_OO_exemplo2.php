<?php

class conta
{
    public $saldo = 0;
    public $titular;
   
    /**
     * metodo para fazer um saque
     * @param float $valor
     */

    public function sacar($valor)
    {
        echo "<hr>Saque Efetuado Valor: <b> $valor </b><hr>";
        $this->saldo -= $valor;
        // $this->saldo = $this->saldo - $valor;
    }
    /**
     * metodo para fazer depósito
     * @param float $valor
     */
    public function depositar($valor)
    {
        echo "<hr>Depósito Efetuado Valor: <b> $valor </b><hr>";
        $this->saldo += $valor;
    }

    /**
     * retorna o saldo atual
     * *@return float $saldo
     */

    public function verSaldo()
    {
        return $this->saldo;
    } 
}

$conta1 = new Conta();
$conta2 = new Conta();

$conta1->titular = 'Luciana de Souza Lima';
$conta1->titular = 'Aline de Oliveira';

$conta1->depositar(500);
$conta1->depositar(100);

echo '<prep>';
var_dump($conta1);
echo '<br';
var_dump($conta1);

echo '<hr';
echo '<Saldo Atual em Conta1 ' .$conta1->verSaldo();

