<?php
//ok
namespace Alura\Banco\Modelo;
use Alura\Banco\Modelo\CPF;

abstract class Pessoa
{
    private $cpf;
    protected $nome;

    public function __construct(CPF $cpf,string $nome)
    {
        $this->validaNome($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function exibirCpf():string
    {
        return $this->cpf->exibirCpf();
    }

    public function exibirNome():string
    {
        return $this->nome;
    }

    public function validaNome(string $titular)
    {
        if(strlen($titular) < 5){
            echo 'Nome precisa ter pelo menos 5 caracteres' . PHP_EOL;
            exit;
        }
    }


}