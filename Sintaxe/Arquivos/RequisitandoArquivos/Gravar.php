<?php
function gravar(string $texto, string $arquivo)
{
    $fp = fopen($arquivo, "a+");
    fwrite($fp, "{$texto} \r\n");
    fclose($fp);
}

date_default_timezone_set('America/Campo_Grande');
//gravar(date("d/m/Y h:i:s a"), "file.txt");