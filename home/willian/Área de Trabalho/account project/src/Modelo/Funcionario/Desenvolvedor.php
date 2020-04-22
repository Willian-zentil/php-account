<?php


namespace Alura\Banco\Modelo\Funcionario;


class Desenvolvedor extends Funcionario
{
    public function sobeNivel()
    {
        $this->recebeAumento($this->exibirSalario() * 0.75);
    }

    public function CalculaBonificacao():float
    {
        return 500;
    }
}