<?php

class Agencia
{
    public $nome;
    public $telefone;

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

}

class Titular
{
    private $nome;

    private $celular;

    public function setDados(array $dados)
    {
        $this->nome = $dados['nome'];
        $this->celular = $dados['celular'];        
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function celular()
    {
        return $this->celular;
    }    

}

class Contas
{
    private $agencia;

    private $titular;

    private $saldo;    

    public function setAgencia(Agencia $agencia)
    {
        $this->agencia = $agencia;        
    }

    public function getAgencia() : Agencia
    {
        return $this->agencia;
    }

    public function setTitular() : Titular
    {
        return $this->titular;
    }    

}

$objAgencia = new Agencia();
$objAgencia->nome = 'VL Mariana - VLM';
$objAgencia->telefone = '4044-2515';

$objTitular = new Titular();
$objTitular->setDados([
    'nome' => 'Aline dos Santos',
    'celular' => '96203-9987'
]);

$Conta = new Contas();
$objConta->setAgencia($objAgencia);
$objConta->setTitular($objTitular);
$objConta->saldo = 500;


echo '<pre>';
var_dump($objAgencia);
echo '<hr>';
var_dump($objTitular);
echo '<hr>';
var_dump($objConta);
echo '<hr>';

echo '<hr>';
var_dump($objConta->getAgencia());
echo '<hr>';

echo '<hr>';
echo 'Agencia: ' . $objConta->getAgencia()->getNome() . ' - ' . $objConta->getAgencia()->getTelefone() . '<br>';
echo 'Titular: ' . $objConta->getAgencia()->getNome() . ' - ' . $objConta->getAgencia()->getCelular() . '<br>';
echo 'Saldo: ' . $objConta->saldo;
