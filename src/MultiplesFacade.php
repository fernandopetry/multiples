<?php

namespace Petry\Multiples;

use Petry\Multiples\PrintsMultiples;
use Petry\Multiples\Rules\{
    Multiple3And5,
    Multiple3,
    Multiple5
};

/**
 * Padrão Facade: Fachada para a execução do programa    
 * 
 * Classe: MultiplesFacade
 * 
 * @filesource MultiplesFacade.php
 * @package LN
 * @subpackage 
 * @category
 * @version v1.0
 * @since 24/06/2017 23:16:17
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class MultiplesFacade
{

    /**
     * Valor inicial para iniciar o loop
     * @var integer
     */
    private $initialValue;

    /**
     * Valor final do loop
     * @var integer
     */
    private $finalValue;

    /**
     * Resultado da operação
     * @var string
     */
    private $print;

    /**
     * Método construtor
     * @param int $initialValue Valor inicial do loop
     * @param int $finalValue Valor final do loop
     */
    function __construct(int $initialValue, int $finalValue)
    {
        $this->initialValue = $initialValue;
        $this->finalValue   = $finalValue;
        $this->execute();
    }

    /**
     * Executa o loop de valores e verificações e grava o resultado em {$print}
     */
    private function execute()
    {
        try {
            for ($i = $this->initialValue; $i <= $this->finalValue; $i++) {
                $print       = new PrintsMultiples($i);
                $print->addRules(new Multiple3And5());
                $print->addRules(new Multiple3());
                $print->addRules(new Multiple5());
                $this->print .= $print->run() . "<br>";
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Resultado da operação
     * @return string
     */
    function getPrint()
    {
        return $this->print;
    }

}
