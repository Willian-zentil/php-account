<?php

require_once 'conta.php';

$conta1 = new Conta('502.802.405.65', 'kleber');
$conta1->depositar(700);
$conta1->sacar(600);
$conta1->exibirCpf();
$conta1->exibirSaldo();
$conta1->exibirtitular();

echo Conta::exibirContas();//exibi total de contas criadas
