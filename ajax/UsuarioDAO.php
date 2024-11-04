<?php
require_once("action/gravar.php");
require_once("action/ler.php");

$bairro = filter_input(INPUT_POST, "txtBairro", FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, "txtCep", FILTER_SANITIZE_NUMBER_INT);
$rua = filter_input(INPUT_POST, "txtRua", FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, "txtCidade", FILTER_SANITIZE_SPECIAL_CHARS);
$numero = filter_input(INPUT_POST, "txtNumero", FILTER_SANITIZE_NUMBER_INT);
$estado = filter_input(INPUT_POST, "txtEstado", FILTER_SANITIZE_SPECIAL_CHARS);
$arrDados = ['bairro' => $bairro, 'cep' => $cep, 'rua' => $rua, 'cidade' => $cidade, 'numero' => $numero, 'estado' => $estado];


try {
    $cadastro = $cep . ".txt";
    if (!file_exists($cadastro)) {
        //Faz o cadastro
        $diretorioCompleto = "arquivos/" . $cadastro; //Diretório completo
        $fopen = fopen($diretorioCompleto, "a+");
        $str = json_encode($arrDados);

        if (fwrite($fopen, $str)) {
            fclose($fopen);
            echo 1; //Usuário cadastrado com sucesso
        } else {
            fclose($fopen);
            echo -10; //Erro ao tentar cadastrar
        }
    } else {
        echo -1; //Usuário já cadastrado
    }
} catch (Exception $ex) {
    if ($this->debug) {
        echo $ex->getMessage();
    }
}