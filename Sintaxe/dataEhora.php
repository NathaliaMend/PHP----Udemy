<?php
// Exibir DATA:
echo date("Y") . " d.c<br>";  // Y maiusculo = 2024 // y minusculo = 24.
echo date("d/M/Y.") . "<br><hr>"; // d ou j para dia.

// Exibir HORA:
date_default_timezone_set('America/Campo_Grande');
echo date("d/m/Y h:i:s a") . "<br>"; //Localizar o fuso-horario antes de imprimir a hora.

$hora = date("H");
if ($hora >= 0 && $hora <= 5) {
    echo "Boa Madrugada!";
} elseif ($hora > 5 && $hora < 12) {
    echo "Bom dia!";
}elseif ($hora >= 12 && $hora <= 18){
    echo "Boa Tarde!";
} elseif ($hora > 18 ){
    echo "Boa Noite!";
}