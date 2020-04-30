<?php

namespace Alura\Banco\Modelo\Conta;


use Exception\OperacaoNaoRealizadaException;
use \LeitorArquivo;

class ContaCorrente extends conta
{
    public static $operacaoNaoRealizada;

    public function percentualTarifa():float
    {
        return 0.05;
    }

    //recebe como referencia e altera os valores utilizando os métodos sacar e depositar
    public function transferir(float $valorTransferir, Conta $conta):void
    {
        try {
            $arquivo = new LeitorArquivo("Log transerencia.txt");
            $arquivo->abrirArquivo();
            $arquivo->escreverNoArquivo();

            if($valorTransferir > $this->saldo){
                throw new \Exception('valor insuficiente');
            }
            $conta->depositar($valorTransferir);
            $this->sacar($valorTransferir);

            $arquivo->fecharArquivo();
            ContaCorrente::$operacaoNaoRealizada++;
        }catch (\Exception $e){
            throw new OperacaoNaoRealizadaException("operação não realizada", 55, $e);
        }

    }

}