<?php

require_once './vendor/autoload.php';

//use Petry\Multiples\MultiplesFacade;
//
//try {
//    $facade = new MultiplesFacade(1, 100);
//    echo $facade->getPrint();
//} catch (\Exception $e) {
//    echo $e->getMessage();
//}

for ($i = 1; $i <= 100; $i++) {
    if (($i % 3) == 0) {
        $print = new Petry\Multiples\PrintsMultiples($i);
        $print->addRules(new Petry\Multiples\Rules\Multiple3());
        echo $print->run() . $i . '<br>';
    }
}