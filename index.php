<?php

require_once './vendor/autoload.php';

use Petry\Multiples\MultiplesFacade;

try {
    $facade = new MultiplesFacade(1, 100);
    echo $facade->getPrint();
} catch (\Exception $e) {
    echo $e->getMessage();
}
