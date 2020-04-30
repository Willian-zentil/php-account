<?php

class LeitorArquivo
{
    private $nomeArquivo;

    public function __construct($nomeArquivo)
    {
        $this->nomeArquivo = $nomeArquivo
    }

    public function abrirArquivo()
    {
        echo "Abrindo arquivo";
    }

    public function lerArquivo()
    {
        echo "lendo arquivo";
    }

    public function escreverNoArquivo()
    {
        echo "escrevendo no arquivo";
    }

    public function fecharArquivo()
    {
        echo "fechando arquivo";
    }

}