<?php

require 'funcoes.php';


$src = new \SRC\Funcoes();
//retorna o século
$src->SeculoAno(2020);
$src->obterSeculo();

//retorna número primo anterior
$src->primoAnterior(50);
$src->obterNumeroPrimo();

//retorna segundo maior número de um array
$src->segundoMaior(array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)));
$src->obterSegundoMaiorNumero();

//retorna true ou false caso a sequência de números esteja correta
$src->sequenciaCrescente([10, 1, 2, 3, 4, 5]);
$src->excluirNumero(10);
var_dump($src->obterSequeciaCrescente());




