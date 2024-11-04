<?php
// POST é um array associativo - envia informacoes
//isset verifica se uma variavel existe
$arryNome = ["Valentina", "Fernanda", "Pedro", "Fernanda", "Marcos", "Joana"];
//$nome = filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_SPECIAL_CHARS);
//$nome = filter_input(INPUT_POST, "txtNome");
$nome = htmlspecialchars(filter_input(INPUT_POST, "txtNome"));
$email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_EMAIL);
$funcionarioValor = filter_input(INPUT_POST, "slFuncionario", FILTER_SANITIZE_NUMBER_INT);
$funcionario = "";

if ($funcionarioValor){
    $funcionario= $arryNome[$funcionarioValor];
}
/*if (isset($_POST["txtNome"])) {
    $nome = $_POST["txtNome"];
}
if (isset($_POST["txtEmail"])) {
    $email = $_POST["txtEmail"];
}
if (isset($_POST["slfuncionarios"])) {
    $funcionario = $arryNome[$_POST["txtNome"]];
}
*/
?>
<!doctype html>
<html lang="pt-br">
<head>
    <title>Post</title>
    <meta charset="utf-8">
    <style>
        ul {
            list-style: none;
        }

        input, select {
            padding: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<form method="post">
    <ul>
        <li>Nome: <input type=text" name="txtNome"/></li>
        <li>Email: <input type=text" name="txtEmail"/></li>
        <li>Funcionário:
            <select name="slFuncionario">
                <?php
                for ($i = 0; $i < count($arryNome); $i++) {
                    ?>

                    <option value="<?= $i; ?>"> <?= $arryNome[$i]; ?></option>
                    <?php
                }
                ?>
            </select>
        </li>
        <li><input type="submit" name="btnSubmit" value="cadastrar"></li>
    </ul>
</form>
<br><hr><br>
<p>Nome: <?=$nome;?></p>
<p>Email:<?=$email;?></p>
<p>Funcionário:<?=$funcionario;?></p>
</body>
</html>
