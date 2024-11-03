<?php
// Conjuunto de instrucoes -- function nomeDaFuncao(parametro){acoes}
$nome = "Nathalia";
function exibirNome($nome)
{
    return "Meu nome é {$nome}";
}

echo exibirNome($nome);
echo "<hr>";

function Ajuste($p1, $p2)
{
    return (($p1 * $p2) / 4);
}

?>

<!doctype html>
<html lang="pt-br">
<head>
    <title>Function</title>
    <meta charset="utf-8">
</head>
<body>
    <h1><?= Ajuste(3, 10);?></h1>
</body>
</html>
<!-- Existem funcoes que ja vêm prontas no php-->
