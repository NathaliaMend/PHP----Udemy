<?php
// Declaracao:
$nomes = Array ("Ana", "Julia", "Caio", "Gabi", "Felipi");
echo $nomes [3] . "<br>";
//Resultado Gabi.

/* for ($i = 0; $i < count($nomes); $i++){
    echo $nomes[$i] . "<br>";
}

// count ($variavel) --> conta todas as posicoes ate o final , se coloca geralmente no parametro2.
*/ ?>
<!doctype html>
<html lang="pt-br">
<head>
    <title>Array</title>
    <meta charset="utf-8">
</head>
<body>
    <select id="slprofessores" name="slprofessores">
        <?php
        for ($i = 0; $i < count($nomes); $i++){
            ?>
            <option value="<?= $i; ?>"> <?= $nomes[$i];?> </option>
        <?php
        }
        ?>
    </select>
    <button onclick="alert(document.getElementById('slprofessores'). value);">Selecionar</button>
</body>
</html>

<!-- Trabalhando com um array dentro do outro por ASSOCIAÇÃO-->
<?php
$arryNotas = array(
        "aluno1" => array(
        "nome" => "Julia",
        "nota" => 10
)
    );
echo $arryNotas["aluno1"]["nota"];