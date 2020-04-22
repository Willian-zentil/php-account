<?php


namespace Alura\Banco\Modelo\Conta;



class contaPoupanca extends conta
{
    public function percentualTarifa(): float
    {
        return 0.03;
    }
}