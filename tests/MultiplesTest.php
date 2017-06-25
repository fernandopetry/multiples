<?php

namespace Petry\Multiples;

use Petry\Multiples\PrintsMultiples;
use Petry\Multiples\Rules\{
    Multiple3And5,
    Multiple3,
    Multiple5
};

/**
 * Bateria de testes para valores de 1 - 100   
 * 
 * Classe: Multiples
 * 
 * @filesource Multiples.php
 * @package Test
 * @version v1.0
 * @since 24/06/2017 23:00:19
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class MultiplesTest extends \PHPUnit_Framework_TestCase
{

    public function testGeneral()
    {
        for ($i = 1; $i <= 100; $i++) {
            if (($i % 3) == 0 && ($i % 5) == 0) {
                $print = new PrintsMultiples($i);
                $print->addRules(new Multiple3And5());
                $print->addRules(new Multiple3());
                $print->addRules(new Multiple5());
                $this->assertEquals('Linianos', $print->run());
            } elseif (($i % 3) == 0) {
                $print = new PrintsMultiples($i);
                $print->addRules(new Multiple3And5());
                $print->addRules(new Multiple3());
                $print->addRules(new Multiple5());
                $this->assertEquals('Linio', $print->run());
            } elseif (($i % 5) == 0) {
                $print = new PrintsMultiples($i);
                $print->addRules(new Multiple3And5());
                $print->addRules(new Multiple3());
                $print->addRules(new Multiple5());
                $this->assertEquals('IT', $print->run());
            } else {
                $print = new PrintsMultiples($i);
                $print->addRules(new Multiple3And5());
                $print->addRules(new Multiple3());
                $print->addRules(new Multiple5());
                $this->assertEquals($i, $print->run());
            }
        }
    }

}
