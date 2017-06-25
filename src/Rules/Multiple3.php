<?php

namespace Petry\Multiples\Rules;

/**
 * Esta regra define que numeros multiplos de 3 tem o valor de "Linio"    
 * 
 * Classe: Multiple3
 * 
 * @filesource Multiple3.php
 * @package LN
 * @subpackage Multiples
 * @category Rules
 * @version v1.0
 * @since 24/06/2017 21:46:57
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class Multiple3 implements iMultiples
{

    /**
     * Verifica se um número é multiplo
     * @param int $number Numero a verificar se é multiplo por 3
     */
    public function isMultiple(int $number)
    {
        return (($number % 3) == 0);
    }

    /**
     * Resultado da regra se o numero 5 é multipo de {$number}
     * @return mixed Valor resultado [Linio]
     */
    public function getValue()
    {
        return "Linio";
    }

}
