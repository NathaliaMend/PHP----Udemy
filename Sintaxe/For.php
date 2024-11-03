<!--Sintaxe do For

for (parametro1; parametro2; parametro3){
    echo parametro3;
}
for ($i = 0; $i < 10; $i++){
    echo $i ."<br>";
}
-->
<!doctype html>
<html lang="pt-br">
    <head>
        <title>For</title>
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
        <?php
        for($i = 1; $i <=10; $i++){
            for($j = 0; $j <=10; $j++){
              ?>
            <li> <?= $i ?> * <?= $j; ?> = <?= ($i * $j);?> </li>
            <?php
            }
            echo "<br>";
        }
        ?>
        </ul>
    </body>

</html>