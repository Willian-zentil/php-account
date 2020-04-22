<?php
//ok
namespace Alura\Banco\Modelo\Conta;
//Declaração da class Conta
abstract class Conta
{
  private $titular;
  protected $saldo;
  private static $numeroContas = 0;
  /*
   * @var int $tipo 1 == Conta corrente; 2 == Conta poupança
   */

  //ao criar um objeto do tipo conta, inicializa cpf, nome do titular, saldo e soma mais um ao numero de contas
  public function __construct(Titular $titular)
  {
      $this->saldo = 0;
      $this->titular = $titular;
      self::$numeroContas++;

  }
  //ao deletar uma conta subtrai um do numero de contas
  public function __destruct()
  {
      self::$numeroContas--;
  }
  //recebe valor que deseja sacar por parametro e realiza a verificação com o valor na conta
  public function sacar(float $valorASacar):void
  {
      $tarifaSaque = $this->percentualTarifa();
      $valorSaque = $valorASacar + $tarifaSaque;
      if($valorSaque > $this->saldo){
          echo 'Valor para saque indisponivel';
          return;
      }

      $this->saldo -= $valorSaque;
  }
  //recebe valor que deseja depositar por parametro e realiza a verificação com o valor na conta
  public function depositar(float $valorDepositar):void
  {
      if($valorDepositar < 0){
          echo 'valor precisa ser positivo';
          return;
      }
      $this->saldo += $valorDepositar;
  }

  public static function exibirContas(): int
  {
      return self::$numeroContas;
  }

  public function exibirCpf():string
  {
        return $this->titular->exibirCpf() . PHP_EOL;
  }

  public function exibirtitular():string
  {
          return $this->titular->exibirNome() . PHP_EOL;
  }

  public function exibirSaldo():float
  {
        return $this->saldo . PHP_EOL;
  }

  public function exibirNumeroConta():void
  {
        echo self::$numeroContas;
  }

  abstract public function percentualTarifa():float;

}
