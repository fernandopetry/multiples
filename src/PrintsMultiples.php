<?php

namespace Petry\Multiples;

use Petry\Multiples\Rules\iMultiples;

/**
 * Impressão de valores analisando as regras registradas    
 * 
 * Classe: PrintsMultiples
 * 
 * @filesource PrintsMultiples.php
 * @package LN
 * @subpackage Multiples
 * @category
 * @version v1.0
 * @since 24/06/2017 21:57:46
 * @copyright (cc) 2017, Fernando Petry
 * 
 * @author Fernando Petry <fernando@ideia.ppg.br>                                                  
 */
class PrintsMultiples
{

    /**
     * Lista com as regras
     * @var Multiples
     */
    private $rules;

    /**
     * Valor a ser impresso no final da execução
     * @var mixed
     */
    private $print;

    /**
     * Numero para comparar com as regras de multiplicidade
     * @var integer
     */
    private $number;

    /**
     * Método construtor
     * @param int $number Numero para comparar com as regras de multiplicidade
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * Adiciona uma regra que implementa a interface iMultiples <br>
     * Atenção: as regras serão validadas na ordem de inserção, <br>
     * quando a primeira regra for satisfeita as demais serão ignoradas
     * @param iMultiples $rule Instancia de regra
     */
    public function addRules(iMultiples $rule)
    {
        $this->rules[] = $rule;
    }

    /**
     * Verifica as regras inseridas
     */
    protected function checkRules()
    {
        $this->print = $this->number;
        foreach ($this->rules as $rule) {
            if ($rule->isMultiple($this->number)) {
                $this->print = $rule->getValue();
                break;
            }
        }
    }

    /**
     * Verifica as regras
     * @return mixed Valor correspondente
     */
    public function run(): string
    {
        $this->checkRules();
        return $this->print;
    }

}
