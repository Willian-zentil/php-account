<?php
//ok
require_once 'src/autoload.php';

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Conta\{Titular,conta,contaPoupanca,ContaCorrente};
use Alura\Banco\Modelo\{CPF, Endereco, Funcionario\Diretor};
use Alura\Banco\Modelo\Exception\ExceptionSaldoInsuficiente;

/*teste diretor*/

$autenticador = new Autenticador();
$diretor1 = new Diretor(new CPF('542.846.287-87'),'Claudia', 3000);
//$autenticador->tentaLogin($diretor1, '1234');

/**/
/*teste usuario 1*/
$endereco1 = new Endereco('170b', 'Bauru', 'carrazai', 'centro');
$conta1 = new contaCorrente(
    new Titular(
        new CPF('542.846.287-86'),
        'willian',
        $endereco1
    )
);
$conta1->depositar(800);
//$conta1->sacar(950);
try {
    $conta1->transferir(300, $conta1);
}catch(\Exception\ExceptionSaldoInsuficiente $error){
    echo $error->getMessage(). PHP_EOL;
    echo $error->saldo;
}
echo "AAAAA";



