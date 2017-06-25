<?php

namespace Petry\Multiples\Rules;

/**
 * Esta regra define que numeros multiplos de 5 tem o valor de "IT"     
 * 
 * Classe: Multiple5
 * 
 * @filesource Multiple5.php
 * @package LN
 * @subpackage Multiples
 * @category Rules
 * @version v1.0
 * @since 24/06/2017 21:48:58
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class Multiple5 implements iMultiples
{

    /**
     * Verifica se um número é multiplo
     * @param int $number Numero a verificar se é multiplo por 5
     */
    public function isMultiple(int $number)
    {
        return (($number % 5) == 0);
    }

    /**
     * Resultado da regra se o numero 5 é multipo de {$number}
     * @return mixed Valor resultado [IT]
     */
    public function getValue()
    {
        return "IT";
    }

}
