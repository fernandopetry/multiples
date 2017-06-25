<?php

namespace Petry\Multiples\Rules;

use Petry\Multiples\PrintsMultiples;
use Petry\Multiples\Rules\Multiple3And5;

/**
 *  Bateria de testes para valores de 1 - 100  para a regra de 3 e 5      
 * 
 * Classe: Multiple3And5
 * 
 * @filesource Multiple3And5.php
 * @package LN
 * @subpackage 
 * @category
 * @version v1.0
 * @since 25/06/2017 13:36:13
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class Multiple3And5Test extends \PHPUnit_Framework_TestCase
{

    public function testMultiple3and5()
    {
        for ($i = 1; $i <= 100; $i++) {
            if (($i % 3) == 0 && ($i % 5) == 0) {
                $print = new PrintsMultiples($i);
                $print->addRules(new Multiple3And5());
                $this->assertEquals('Linianos', $print->run());
            }
        }
    }

}
