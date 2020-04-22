<?php
//ok
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{CPF, Pessoa};

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(CPF $cpf, string $nome, float $salario)
    {
        //herda o método construtor de pessoa para o construtor funcionario
        parent::__construct($cpf, $nome);
        $this->salario = $salario;
    }

    public function exibirSalario():float
    {
        return $this->salario;
    }

    public function alterarNome(string $nome):void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function Aumento(float $valorAumento):void
    {
        if($valorAumento < 0){
            echo 'Valor deve ser posttivo';
            return;
        }
        $this->salario += $valorAumento;
    }

    abstract function calcularBonificacao():float;

}