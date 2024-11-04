<?php
// Ciclo de vida para a persistencia de um arquivos
// 1. ABRIR - fopen()
// 2. LER/ GRAVAR - fread() / fwrite()
// 3. FECHAR - fclose()

function gravar(string $texto, string $arquivo) {
    $fp = fopen($arquivo, "a+");
    fwrite($fp, "{$texto} \r\n");
    fclose($fp);
}
date_default_timezone_set('America/Campo_Grande');
gravar(date("d/m/Y h:i:s a"), "file.txt");
//-----------------------------------------------------
function leitura(string $arquivo) {
    $fp = fopen($arquivo, "r");
    $texto = fread($fp, filesize($arquivo));
    fclose($fp);
    return $texto;
}
echo leitura("file.txt");