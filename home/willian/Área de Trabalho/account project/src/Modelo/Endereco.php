<?php
//ok
namespace Alura\Banco\Modelo;

final class Endereco
{
    private $numero;
    private $cidade;
    private $rua;
    private $bairro;

    public function __construct(string $numero, string $cidade, string $rua, string $bairro)
    {
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->rua = $rua;
        $this->bairro = $bairro;
    }

    public function exibirNumero(): string
    {
        return $this->numero;
    }

    public function exibirCidade(): string
    {
        return $this->cidade;
    }

    public function exibirRua(): string
    {
        return $this->rua;
    }

    public function exibirBairro(): string
    {
        return $this->bairro;
    }

    public function __toString():string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

}