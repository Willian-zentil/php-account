<?php

namespace Alura\Banco\Modelo\Conta;


class ContaCorrente extends conta
{
    public function percentualTarifa():float
    {
        return 0.05;
    }

    //recebe como referencia e altera os valores utilizando os métodos sacar e depositar
    public function transferir(float $valorTransferir, Conta $conta):void
    {
        if($valorTransferir > $this->saldo){
            echo 'Saldo insuficiente: ' . $this->saldo;
            return;
        }
        $conta->depositar($valorTransferir);
        $this->sacar($valorTransferir);
    }

}