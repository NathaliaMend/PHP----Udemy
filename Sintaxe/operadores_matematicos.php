<?php
//echo (1 + 1) * 3;
$adicao = 2 + 5;
$subtracao = 5 - 2;
$multiplicacao = 5 * 2;
$divisao = 5 / 2;
$modulo = 1 % 3;
?>
<!doctype html>
<html lang = "pt-br">
    <head>
        <title>Operadores matematicos</title>
        <meta charset=utf-8"/>
    </head>
    <body>
        <p>2 + 5 = <?=$adicao?></p>
        <p>5 - 2 = <?=$subtracao?></p>
        <p>5 * 2 = <?=$multiplicacao?></p>
        <p>5 / 2 = <?=$divisao?></p>
        <p>1 mod 3 = <?=$modulo?></p>
    <hr/>
        <p><?=($adicao * $divisao);?></p>

    </body>
</html>

<?php
$a = 5;
$b = 3;
$c = ($a>$b)?true:false;
print $c;
?>