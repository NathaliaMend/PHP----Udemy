<?php
function leitura(string $arquivo) {
    $fp = fopen($arquivo, "r");
    $texto = fread($fp, filesize($arquivo));
    fclose($fp);
    return $texto;
}
//echo leitura("file.txt");
