<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacao
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario):void
    {
        $this->totalBonificacoes += $funcionario->bonificacao();
    }

    public function exibirTotal():float
    {
        return $this->totalBonificacoes;
    }
}