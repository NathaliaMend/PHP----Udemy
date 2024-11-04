<?php
// PAra nao mostrar o erro para o cliente

require_once("func.php");

try {
    abrirConexao();
} catch (Exception $ex) {
    echo "<b>Mensagem:</b>" . $ex->getMessage() . "<br>";
    echo "<b>Linha:</b>" . $ex->getLine() . "<br>";
    echo "<b>Arquivo:</b>" . $ex->getFile() . "<br>";
}
/*
try {
    abrirConexao();
} catch (Exception $ex) {
    echo "<b>Mensagem:</b>" . $ex->getMessage() . "<br>";
    echo "<b>Linha:</b>" . $ex->getLine() . "<br>";
    echo "<b>Arquivo:</b>" . $ex->getFile() . "<br>";
} catch (PDOException $ex) {
    echo "<b>Mensagem:</b>" . $ex->getMessage() . "<br>";
    echo "<b>Linha:</b>" . $ex->getLine() . "<br>";
    echo "<b>Arquivo:</b>" . $ex->getFile() . "<br>";
}

try{
    //tenta fazer algo
}catch (Exception $ex) {
    // trata de erros
}finally{
    //Bloco chamado antes de finalizar a estrutura
}
*/