<?php
?>
<!doctype html>
<html lang="pt-br">
<head>
    <title>Do While</title>
    <meta charset="utf-8"
</head>
<body>
    <ul>
        <?php
        $i = 1;
        do {
            ?>
        <li>Valor = <?= $i; ?></li>
        <?php
            $i++;
        } while($i <= 10);
        ?>
    </ul>
</body>

</html>
