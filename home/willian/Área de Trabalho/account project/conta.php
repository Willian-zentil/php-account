<?php

//Declaração da class Conta
class Conta
{
  public $cpf;
  private $titular;
  private $saldo;
  private static $numeroContas = 0;

  //ao criar um objeto do tipo conta, inicializa cpf, nome do titular, saldo e soma mais um ao numero de contas
  public function __construct(string $cpf, string $titular)
  {
      $this->cpf = $cpf;
      $this->titular = $titular;
      $this->validarTitular($titular);
      $this->saldo = 0;

      self::$numeroContas++;
  }
  //ao deletar uma conta subtrai um do numero de contas
  public function __destruct()
  {
      self::$numeroContas--;
  }
  //recebe valor que deseja sacar por parametro e realiza a verificação com o valor na conta
  public function sacar(float $valorSacar):void{
      if($valorSacar > $this->saldo){
          echo 'Valor para saque indisponivel';
          return;
      }

      $this->saldo -= $valorSacar;
  }
  //recebe valor que deseja depositar por parametro e realiza a verificação com o valor na conta
  public function depositar(float $valorDepositar):void{
      if($valorDepositar < 0){
          echo 'valor precisa ser positivo';
          return;
      }
      $this->saldo += $valorDepositar;
  }
  //recebe como referencia e altera os valores utilizando os métodos sacar e depositar
  public function transferir(float $valorTransferir, Conta $conta)
  {
      if($valorTransferir > $this->saldo){
          echo 'Saldo insuficiente: ' . $this->saldo;
      }
     $conta->depositar($valorTransferir);
  }

  public static function exibirContas(): int
  {
      return self::$numeroContas;
  }

  public function exibirCpf():void
  {
        echo $this->cpf . PHP_EOL;
  }

  public function exibirtitular():void
  {
          echo $this->titular . PHP_EOL;
  }

  public function exibirSaldo():void
  {
        echo $this->saldo . PHP_EOL;
  }

  public function validarTitular(string $titular)
  {
        if(strlen($titular) < 5){
            echo 'Nome precisa ter pelo menos 5 caracteres' . PHP_EOL;
            exit;
        }
  }
}
