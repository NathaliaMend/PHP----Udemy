<?php

function Leitura(string $arquivo) {
    try {
        $fp = fopen($arquivo, "r");
        $texto = fread($fp, filesize($arquivo));
        fclose($fp);
        return $texto;
    } catch (Exception $exception) {
        return null;
    }
}

?>