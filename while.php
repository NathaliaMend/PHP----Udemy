<?php
// Estrutura de repeticao (WHIlE / FOR / FOR IT)

/* Utilizamos o WHILE quando nao sabemos quantas vezes ira se repetir
Tenha cuidado com o WHILE sem a condicao de saida (ocorre looping infinito)
*/

$cont = 0;
while ($cont <= 10) {
    echo "Cont: {$cont} <br>";
    // $cont += 1;
    // $cont = $cont + 1;
    $cont++;
}
?>
<!doctype html>
<html>
<head>
    <title>WHILE</title>
    <meta charset="UTF-8">
</head>
<body>
<ul>
    <?php
    $cont = 0;
    while ($cont < 10) {
        if ($cont > 5) {
            ?>
            <li><?= $cont; ?></li>
        <?php }
        $cont++;
    }
    ?>
</ul>
</body>
</html>

