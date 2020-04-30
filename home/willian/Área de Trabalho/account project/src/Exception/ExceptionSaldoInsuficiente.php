<?php
namespace Exception;

class ExceptionSaldoInsuficiente extends \Exception
{
    private $valor, $saldo;


    public function __construct($message, $valor = null, $saldo = null)
    {
        $this->saldo = $saldo;
        $this->valor = $valor;

        parent::__construct($message, null, null);
    }

    public function __get($param)//parametro que acessa qualquer atributo, valor, saldo
    {//ex, $erro -> saldo
        return $this->$param;
    }



}