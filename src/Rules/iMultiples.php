<?php

namespace Petry\Multiples\Rules;

/**
 * Interface que define a assinatura das regras
 * 
 * Interface: iMultiples
 * 
 * @filesource iMultiples.php
 * @package LN
 * @subpackage Multiples
 * @category Rules
 * @version v1.0
 * @since 24/06/2017 21:44:23
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                
 */
interface iMultiples
{

    /**
     * Verifica se um número é multiplo
     * @param int $number Numero a verificar se é multiplo por X
     */
    public function isMultiple(int $number);

    /**
     * Resultado da regra
     * @return mixed Valor resultado
     */
    public function getValue();
}
