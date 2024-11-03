<?php
//$arrFrutas= ["banana", "maca", "mamao", "abacaxi", "uva", "limao"];

$arrFrutas = [
    1 => "banana",
    2 => "maca",
    3 => "mamao",
    4 => "abacaxi",
    5 => "uva",
    6 => "limao"
];

foreach ($arrFrutas as $key => $v) { //para a lista/array o 'as' vai atribuir a uma variavel.
    echo "Key: {$key} => Value: {$v} <br>";  //a variavel escolhida ($v) só pode estar dentro do foreach .
}
echo "<hr>";

$arrNotas = [
    "aluno1" => [
        "nome" => "nathalia",
        "nota" => 9
    ],
    "aluno2" => [
        "nome" => "Miguel",
        "nota" => 8
    ],
    "aluno3" => [
        "nome" => "Ana",
        "nota" => 6
    ],
    "aluno4" => [
        "nome" => "francisco",
        "nota" => 4
    ]
];

 foreach ($arrNotas as $aluno) {
    foreach ($aluno as $chave => $valor){
        echo "{$chave} = {$valor} <br>";
    }
    echo "<br>";
}
/*
foreach ($arrNotas as $aluno) {
   var_dump($aluno);
} */