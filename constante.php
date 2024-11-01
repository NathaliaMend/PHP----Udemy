<?php
//constantes - algo que nao muda

define("min", 17); //Constante chamada de 'min' com o valor '17'
define("max", 45); //Constante chamada de 'max' com o valor '45'

$idade = 24; // Variavel com a idade do cliente '24'
// --------------------
echo "MIN: " .min. "<br>";
echo "MAX: " .max. "<br>";
echo "Idade: " .$idade. "<br><br>";

// - ----- - - -  - - - -  - -
if ($idade >= min && $idade <= max) { // validacao da idade
    echo "Acesso liberado..."; // retorno verdadeiro
} else {
    echo "Acesso Bloqueado"; //retorno falso
}

echo "<hr>PHP versão: ". PHP_VERSION;