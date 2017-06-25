<?php

namespace Petry\Multiples\Rules;

use Petry\Multiples\PrintsMultiples;
use Petry\Multiples\Rules\Multiple5;

/**
 *  Bateria de testes para valores de 1 - 100  para a regra de 5      
 * 
 * Classe: Multiple5Test
 * 
 * @filesource Multiple5Test.php
 * @package LN
 * @subpackage 
 * @category
 * @version v1.0
 * @since 25/06/2017 13:33:20
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class Multiple5Test extends \PHPUnit_Framework_TestCase
{

    public function testMultiple5()
    {
        for ($i = 1; $i <= 100; $i++) {
            if (($i % 5) == 0) {
                $print = new PrintsMultiples($i);
                $print->addRules(new Multiple5());
                $this->assertEquals('IT', $print->run());
            }
        }
    }

}
