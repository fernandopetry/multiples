<?php

namespace Petry\Multiples\Rules;

use Petry\Multiples\PrintsMultiples;
use Petry\Multiples\Rules\Multiple3;

/**
 * Bateria de testes para valores de 1 - 100  para a regra de 3    
 * 
 * Classe: Multiple3
 * 
 * @filesource Multiple3.php
 * @package LN
 * @subpackage 
 * @category
 * @version v1.0
 * @since 25/06/2017 12:44:48
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class Multiple3Test extends \PHPUnit_Framework_TestCase
{

    public function testMultiple3()
    {
        for ($i = 1; $i <= 100; $i++) {
            if (($i % 3) == 0) {
                $print = new PrintsMultiples($i);
                $print->addRules(new Multiple3());
                $this->assertEquals('Linio', $print->run());
            }
        }
    }

}
