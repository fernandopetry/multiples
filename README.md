# Programa Multiplos

Este programa imprimi numeros de 1 a 100, sendo que respeita as regras inseridas, 
neste exemplo o progra gera numeros de de 1 a 100.

**Regras deste exemplo**

- Quando o numero for multiplo de 3, ele imprime "Linio"
- Quando o numero for multiplo de 5, ele imprime "IT"
- Quando o numero for multiplo de 3 e 5, ele imprime "Linianos"

*Observação: Para adicionar novas regras crie a classe em 'src/Rules' implementando 'iMultiples'*

### Primeiro exemplo sem FACADE

```PHP
// autoload do composer que faz o carregamento dinamico das classes
require_once './vendor/autoload.php';
try {
    for ($i = 1; $i <= 100; $i++) {
        $print       = new PrintsMultiples($i);

        // esta regra define se $i for multiplo de 3 ou 5 ela é válida para seu valor
        $print->addRules(new Multiple3And5());

        // esta regra define se $i for multiplo de 3 ela é válida para seu valor
        $print->addRules(new Multiple3());

        // esta regra define se $i for multiplo de 5 ela é válida para seu valor
        $print->addRules(new Multiple5());
        $this->print .= $print->run() . "<br>";
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}
```

### Segundo exemplo com FACADE

```PHP
require_once './vendor/autoload.php';

use Petry\Multiples\MultiplesFacade;

try {
    $facade = new MultiplesFacade(1, 100);
    echo $facade->getPrint();
} catch (\Exception $e) {
    echo $e->getMessage();
}
```