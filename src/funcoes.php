<?php

namespace SRC;

class Funcoes
{

    private $ano;
    private $numero;
    private $array = array();
    private $array1 = array();
    private $numeroExclusao;
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function seculoAno(int $ano)
    {

        $this->ano = $ano;
    }

    public function obterSeculo()
    {
        if ($this->ano == 1) {
            $seculo = 1;
        } elseif ($this->ano < 1) {
            echo "Século não pode ser negativo<br>" ;
        } else {
            $seculo = (int)(($this->ano - 1) / 100) + 1;
            echo $seculo . "<br>";
        }
    }
    /*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function primoAnterior(int $numero)
    {
        $this->numero = $numero;
    }

    public function obterNumeroPrimo()
    {
        $j = 2;
        $numeroPrimo = '';

        while ($j < $this->numero) {

            $i = 2;
            $primo = 1;

            while ($i < $j) {
                if ($j % $i == 0) {
                    $primo = 0;
                    break;
                }
                $i++;
            }
            if ($primo) {
                $numeroPrimo = $j;
            }
            $j++;
        }

        echo $numeroPrimo . "<br>";
    }

    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function segundoMaior(array $arr)
    {
        $this->array = $arr;
    }

    public function obterSegundoMaiorNumero()
    {
        $matriz = $this->array;
        $maior = $matriz[0][0];
        $segundoMaior = $maior;

        for ($i = 0; $i < count($matriz); $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($matriz[$i][$j] > $maior) {
                    $segundoMaior = $maior;
                    $maior = $matriz[$i][$j];
                }
            }
        }

        echo $segundoMaior . "<br>";
    }

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */

    public function sequenciaCrescente(array $arr)
    {
        $this->array1 = $arr;
    }

    public function obterSequeciaCrescente()
    {
        $matriz = $this->array1;

        $key = array_search($this->numeroExclusao, $matriz, true);

        if ($key !== false) {
            unset($matriz[$key]);
        }
        $ordenado = $matriz;
        sort($ordenado);

        $repetido = array_count_values($matriz);

        foreach ($repetido as $key => $value) {
            if ($value > 1) {
                return false;
            }
            else {
                if (array_values($matriz) == array_values($ordenado)) {
        
                    return true;
    
                } else {
                    return false;
                }
            }
        }
    }

    public function excluirNumero($numeroExclusao)
    {
        $this->numeroExclusao = $numeroExclusao;
    }
}
